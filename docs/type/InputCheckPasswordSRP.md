# InputCheckPasswordSRP

**Description** : *Constructors for checking the validity of a 2FA SRP password*

**Layer** : 211

```tl
inputCheckPasswordEmpty#9880f658 = InputCheckPasswordSRP;
inputCheckPasswordSRP#d27ff082 srp_id:long A:bytes M1:bytes = InputCheckPasswordSRP;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputCheckPasswordEmpty**](constructor/inputCheckPasswordEmpty) | There is no password |
| [**inputCheckPasswordSRP**](constructor/inputCheckPasswordSRP) | Constructor for checking the validity of a 2FA SRP password (see SRP) |