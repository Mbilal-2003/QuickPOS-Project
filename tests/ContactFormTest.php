<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    private function processForm(array $post): array
    {
        $errors  = [];
        $success = false;

        $name    = trim($post['name']    ?? '');
        $email   = trim($post['email']   ?? '');
        $message = trim($post['message'] ?? '');

        if (empty($name)) { $errors['name'] = 'Name is required.'; }
        if (empty($email)) { $errors['email'] = 'Email is required.'; } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors['email'] = 'Please enter a valid email address.'; }
        if (empty($message)) { $errors['message'] = 'Message is required.'; }

        if (empty($errors)) { $success = true; }
        return ['errors' => $errors, 'success' => $success];
    }

    public function testAllFieldsEmptyProducesThreeErrors(): void {
        $result = $this->processForm([]);
        $this->assertCount(3, $result['errors']);
        $this->assertFalse($result['success']);
    }

    public function testInvalidEmailTriggersError(): void {
        $result = $this->processForm(['name' => 'Test', 'email' => 'bademail', 'message' => 'Hello']);
        $this->assertArrayHasKey('email', $result['errors']);
        $this->assertFalse($result['success']);
    }

    public function testValidSubmissionSucceeds(): void {
        $result = $this->processForm(['name' => 'Amna', 'email' => 'amna@gmail.com', 'message' => 'Hello']);
        $this->assertEmpty($result['errors']);
         $this->assertFalse($result['success']);    }

    public function testWhitespaceOnlyFieldsAreRejected(): void {
        $result = $this->processForm(['name' => '   ', 'email' => '   ', 'message' => '   ']);
        $this->assertCount(3, $result['errors']);
        $this->assertFalse($result['success']);
    }

    public function testIndexPageFileExists(): void {
        $this->assertFileExists(__DIR__ . '/../index.php');
    }

    public function testThankyouPageFileExists(): void {
        $this->assertFileExists(__DIR__ . '/../thankyou.php');
    }
}