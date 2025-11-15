# payments.CheckCanSendGiftResult

**Description** : *Specifies if a gift can or cannot be sent*

**Layer** : 218

```tl
payments.checkCanSendGiftResultOk#374fa7ad = payments.CheckCanSendGiftResult;
payments.checkCanSendGiftResultFail#d5e58274 reason:TextWithEntities = payments.CheckCanSendGiftResult;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**payments.checkCanSendGiftResultOk**](constructor/payments.checkCanSendGiftResultOk) | The specified gift can be sent |
| [**payments.checkCanSendGiftResultFail**](constructor/payments.checkCanSendGiftResultFail) | The specified gift cannot be sent yet for the specified reason |