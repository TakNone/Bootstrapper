# PaidReactionPrivacy

**Description** : *Paid reaction privacy settings &raquo;*

**Layer** : 216

```tl
paidReactionPrivacyDefault#206ad49e = PaidReactionPrivacy;
paidReactionPrivacyAnonymous#1f0c1ad9 = PaidReactionPrivacy;
paidReactionPrivacyPeer#dc6cfcf0 peer:InputPeer = PaidReactionPrivacy;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**paidReactionPrivacyDefault**](constructor/paidReactionPrivacyDefault) | Uses the default reaction privacy, set using messages.togglePaidReactionPrivacy |
| [**paidReactionPrivacyAnonymous**](constructor/paidReactionPrivacyAnonymous) | Send paid reactions anonymously |
| [**paidReactionPrivacyPeer**](constructor/paidReactionPrivacyPeer) | Send paid reactions as the specified peer, fetched using channels.getSendAs |