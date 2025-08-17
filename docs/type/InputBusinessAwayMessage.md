# InputBusinessAwayMessage

**Description** : *Describes a Telegram Business away message, automatically sent to users writing to us when we're offline, during closing hours, while we're on vacation, or in some other custom time period when we cannot immediately answer to the user*

**Layer** : 211

```tl
inputBusinessAwayMessage#832175e0 flags:# offline_only:flags.0?true shortcut_id:int schedule:BusinessAwayMessageSchedule recipients:InputBusinessRecipients = InputBusinessAwayMessage;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputBusinessAwayMessage**](constructor/inputBusinessAwayMessage) | Describes a Telegram Business away message, automatically sent to users writing to us when we're offline, during closing hours, while we're on vacation, or in some other custom time period when we cannot immediately answer to the user |