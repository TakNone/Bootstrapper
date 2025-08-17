# PhoneCallDiscardReason

**Description** : *Why was the phone call discarded?*

**Layer** : 211

```tl
phoneCallDiscardReasonMissed#85e42301 = PhoneCallDiscardReason;
phoneCallDiscardReasonDisconnect#e095c1a0 = PhoneCallDiscardReason;
phoneCallDiscardReasonHangup#57adc690 = PhoneCallDiscardReason;
phoneCallDiscardReasonBusy#faf7e8c9 = PhoneCallDiscardReason;
phoneCallDiscardReasonMigrateConferenceCall#9fbbf1f7 slug:string = PhoneCallDiscardReason;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**phoneCallDiscardReasonMissed**](constructor/phoneCallDiscardReasonMissed) | The phone call was missed |
| [**phoneCallDiscardReasonDisconnect**](constructor/phoneCallDiscardReasonDisconnect) | The phone call was disconnected |
| [**phoneCallDiscardReasonHangup**](constructor/phoneCallDiscardReasonHangup) | The phone call was ended normally |
| [**phoneCallDiscardReasonBusy**](constructor/phoneCallDiscardReasonBusy) | The phone call was discarded because the user is busy in another call |
| [**phoneCallDiscardReasonMigrateConferenceCall**](constructor/phoneCallDiscardReasonMigrateConferenceCall) | NOTHING |