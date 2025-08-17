# BusinessAwayMessageSchedule

**Description** : *Specifies when should the Telegram Business away messages be sent*

**Layer** : 211

```tl
businessAwayMessageScheduleAlways#c9b9e2b9 = BusinessAwayMessageSchedule;
businessAwayMessageScheduleOutsideWorkHours#c3f2f501 = BusinessAwayMessageSchedule;
businessAwayMessageScheduleCustom#cc4d9ecc start_date:int end_date:int = BusinessAwayMessageSchedule;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**businessAwayMessageScheduleAlways**](constructor/businessAwayMessageScheduleAlways) | Always send Telegram Business away messages to users writing to us in private |
| [**businessAwayMessageScheduleOutsideWorkHours**](constructor/businessAwayMessageScheduleOutsideWorkHours) | Send Telegram Business away messages to users writing to us in private outside of the configured Telegram Business working hours |
| [**businessAwayMessageScheduleCustom**](constructor/businessAwayMessageScheduleCustom) | Send Telegram Business away messages to users writing to us in private in the specified time span |