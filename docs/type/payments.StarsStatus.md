# payments.StarsStatus

**Description** : *Info about the current Telegram Star subscriptions, balance and transaction history »*

**Layer** : 211

```tl
payments.starsStatus#6c9ce8ed flags:# balance:StarsAmount subscriptions:flags.1?Vector<StarsSubscription> subscriptions_next_offset:flags.2?string subscriptions_missing_balance:flags.4?long history:flags.3?Vector<StarsTransaction> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = payments.StarsStatus;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**payments.starsStatus**](constructor/payments.starsStatus) | Info about the current Telegram Star subscriptions, balance and transaction history » |