# InputPasskeyCredential

**Description** : *Credential used to register a passkey &raquo; or to log in with one*

**Layer** : 229

```tl
inputPasskeyCredentialPublicKey#3c27b78f id:string raw_id:string response:InputPasskeyResponse = InputPasskeyCredential;
inputPasskeyCredentialFirebasePNV#5b1ccb28 pnv_token:string = InputPasskeyCredential;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputPasskeyCredentialPublicKey**](constructor/inputPasskeyCredentialPublicKey) | Public-key passkey credential used both for registration and for login, see creating a passkey » and logging in with a passkey » for the full flows |
| [**inputPasskeyCredentialFirebasePNV**](constructor/inputPasskeyCredentialFirebasePNV) | Alternative passkey credential that proves ownership of the account's phone number through a Firebase Phone Number Verification (PNV) token, used on official apps where a full WebAuthn public-key passkey cannot be created, in a way similar to Firebase SMS authentication » |