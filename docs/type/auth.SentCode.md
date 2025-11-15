# auth.SentCode

**Description** : *Contains info on a confirmation code message sent via SMS, phone call or Telegram*

**Layer** : 218

```tl
auth.sentCode#5e002502 flags:# type:auth.SentCodeType phone_code_hash:string next_type:flags.1?auth.CodeType timeout:flags.2?int = auth.SentCode;
auth.sentCodeSuccess#2390fe44 authorization:auth.Authorization = auth.SentCode;
auth.sentCodePaymentRequired#e0955a3c store_product:string phone_code_hash:string support_email_address:string support_email_subject:string currency:string amount:long = auth.SentCode;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**auth.sentCode**](constructor/auth.sentCode) | Contains info about a sent verification code |
| [**auth.sentCodeSuccess**](constructor/auth.sentCodeSuccess) | The user successfully authorized using future auth tokens |
| [**auth.sentCodePaymentRequired**](constructor/auth.sentCodePaymentRequired) | Official apps may receive this constructor, indicating that due to the high cost of SMS verification codes for the user's country/provider, the user must purchase a Telegram Premium subscription in order to proceed with the login/signup |