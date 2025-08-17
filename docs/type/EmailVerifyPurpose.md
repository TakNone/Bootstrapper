# EmailVerifyPurpose

**Description** : *Email verification purpose*

**Layer** : 211

```tl
emailVerifyPurposeLoginSetup#4345be73 phone_number:string phone_code_hash:string = EmailVerifyPurpose;
emailVerifyPurposeLoginChange#527d22eb = EmailVerifyPurpose;
emailVerifyPurposePassport#bbf51685 = EmailVerifyPurpose;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**emailVerifyPurposeLoginSetup**](constructor/emailVerifyPurposeLoginSetup) | Email verification purpose: setup login email |
| [**emailVerifyPurposeLoginChange**](constructor/emailVerifyPurposeLoginChange) | Email verification purpose: change login email |
| [**emailVerifyPurposePassport**](constructor/emailVerifyPurposePassport) | Verify an email for use in telegram passport |