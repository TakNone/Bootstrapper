# messages.SearchResultsCalendar

**Description** : *Information about found messages sent on a specific day*

**Layer** : 211

```tl
messages.searchResultsCalendar#147ee23c flags:# inexact:flags.0?true count:int min_date:int min_msg_id:int offset_id_offset:flags.1?int periods:Vector<SearchResultsCalendarPeriod> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SearchResultsCalendar;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.searchResultsCalendar**](constructor/messages.searchResultsCalendar) | Information about found messages sent on a specific day |