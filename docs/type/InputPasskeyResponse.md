# InputPasskeyResponse

**Layer** : 225

```tl
inputPasskeyResponseRegister#3e63935c client_data:DataJSON attestation_data:bytes = InputPasskeyResponse;
inputPasskeyResponseLogin#c31fc14a client_data:DataJSON authenticator_data:bytes signature:bytes user_handle:string = InputPasskeyResponse;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputPasskeyResponseRegister**](constructor/inputPasskeyResponseRegister) | NOTHING |
| [**inputPasskeyResponseLogin**](constructor/inputPasskeyResponseLogin) | NOTHING |