# help.AppUpdate

**Description** : *Contains info on app update availability*

**Layer** : 211

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
help.noAppUpdate#c45a6536 = help.AppUpdate;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**help.appUpdate**](constructor/help.appUpdate) | An update is available for the application |
| [**help.noAppUpdate**](constructor/help.noAppUpdate) | No updates are available for the application |