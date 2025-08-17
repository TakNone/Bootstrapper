# NotificationSound

**Description** : *Represents a notification sound*

**Layer** : 211

```tl
notificationSoundDefault#97e8bebe = NotificationSound;
notificationSoundNone#6f0c34df = NotificationSound;
notificationSoundLocal#830b9ae4 title:string data:string = NotificationSound;
notificationSoundRingtone#ff6c8049 id:long = NotificationSound;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**notificationSoundDefault**](constructor/notificationSoundDefault) | Indicates the default notification sound should be used |
| [**notificationSoundNone**](constructor/notificationSoundNone) | No notification sound should be used |
| [**notificationSoundLocal**](constructor/notificationSoundLocal) | Indicates a specific local notification sound should be used |
| [**notificationSoundRingtone**](constructor/notificationSoundRingtone) | A specific previously uploaded notification sound should be used |