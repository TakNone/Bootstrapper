# inputPasskeyCredentialFirebasePNV

**Description** : *Alternative passkey credential that proves ownership of the account&#039;s phone number through a Firebase Phone Number Verification \(PNV\) token, used on official apps where a full WebAuthn public\-key passkey cannot be created, in a way similar to Firebase SMS authentication &raquo;*

**Layer** : 229

```tl
inputPasskeyCredentialFirebasePNV#5b1ccb28 pnv_token:string = InputPasskeyCredential;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pnv_token</mark> | [`string`](type/string) | Firebase Phone Number Verification token attesting that the user controls the phone number associated with the account |

---

## Type

[InputPasskeyCredential](type/InputPasskeyCredential)

---

## Example

```php
$inputPasskeyCredential = $client->inputPasskeyCredentialFirebasePNV(
	pnv_token : 'lkmtHPZ6YUfwn93s',
);
```