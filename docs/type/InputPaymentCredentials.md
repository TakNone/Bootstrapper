# InputPaymentCredentials

**Description** : *Payment credentials*

**Layer** : 211

```tl
inputPaymentCredentialsSaved#c10eb2cf id:string tmp_password:bytes = InputPaymentCredentials;
inputPaymentCredentials#3417d728 flags:# save:flags.0?true data:DataJSON = InputPaymentCredentials;
inputPaymentCredentialsApplePay#aa1c39f payment_data:DataJSON = InputPaymentCredentials;
inputPaymentCredentialsGooglePay#8ac32801 payment_token:DataJSON = InputPaymentCredentials;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputPaymentCredentialsSaved**](constructor/inputPaymentCredentialsSaved) | Saved payment credentials |
| [**inputPaymentCredentials**](constructor/inputPaymentCredentials) | Payment credentials |
| [**inputPaymentCredentialsApplePay**](constructor/inputPaymentCredentialsApplePay) | Apple pay payment credentials |
| [**inputPaymentCredentialsGooglePay**](constructor/inputPaymentCredentialsGooglePay) | Google Pay payment credentials |