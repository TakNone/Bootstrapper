# GroupCall

**Description** : *A group call*

**Layer** : 218

```tl
groupCallDiscarded#7780bcb4 id:long access_hash:long duration:int = GroupCall;
groupCall#efb2b617 flags:# join_muted:flags.1?true can_change_join_muted:flags.2?true join_date_asc:flags.6?true schedule_start_subscribed:flags.8?true can_start_video:flags.9?true record_video_active:flags.11?true rtmp_stream:flags.12?true listeners_hidden:flags.13?true conference:flags.14?true creator:flags.15?true messages_enabled:flags.17?true can_change_messages_enabled:flags.18?true min:flags.19?true id:long access_hash:long participants_count:int title:flags.3?string stream_dc_id:flags.4?int record_start_date:flags.5?int schedule_date:flags.7?int unmuted_video_count:flags.10?int unmuted_video_limit:int version:int invite_link:flags.16?string send_paid_messages_stars:flags.20?long default_send_as:flags.21?Peer = GroupCall;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**groupCallDiscarded**](constructor/groupCallDiscarded) | An ended group call |
| [**groupCall**](constructor/groupCall) | Info about a group call or livestream |