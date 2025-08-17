# channelAdminLogEventsFilter

**Description** : *Filter only certain admin log events*

**Layer** : 211

```tl
channelAdminLogEventsFilter#ea107ae4 flags:# join:flags.0?true leave:flags.1?true invite:flags.2?true ban:flags.3?true unban:flags.4?true kick:flags.5?true unkick:flags.6?true promote:flags.7?true demote:flags.8?true info:flags.9?true settings:flags.10?true pinned:flags.11?true edit:flags.12?true delete:flags.13?true group_call:flags.14?true invites:flags.15?true send:flags.16?true forums:flags.17?true sub_extend:flags.18?true = ChannelAdminLogEventsFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **join** | [`flags.0?true`](type/true) | Join events, including joins using invite links and join requests |
| **leave** | [`flags.1?true`](type/true) | Leave events |
| **invite** | [`flags.2?true`](type/true) | Invite events |
| **ban** | [`flags.3?true`](type/true) | Ban events |
| **unban** | [`flags.4?true`](type/true) | Unban events |
| **kick** | [`flags.5?true`](type/true) | Kick events |
| **unkick** | [`flags.6?true`](type/true) | Unkick events |
| **promote** | [`flags.7?true`](type/true) | Admin promotion events |
| **demote** | [`flags.8?true`](type/true) | Admin demotion events |
| **info** | [`flags.9?true`](type/true) | Info change events (when about, linked chat, location, photo, stickerset, title or username, slowmode, history TTL settings of a channel gets modified) |
| **settings** | [`flags.10?true`](type/true) | Settings change events (invites, hidden prehistory, signatures, default banned rights, forum toggle events) |
| **pinned** | [`flags.11?true`](type/true) | Message pin events |
| **edit** | [`flags.12?true`](type/true) | Message edit events |
| **delete** | [`flags.13?true`](type/true) | Message deletion events |
| **group_call** | [`flags.14?true`](type/true) | Group call events |
| **invites** | [`flags.15?true`](type/true) | Invite events |
| **send** | [`flags.16?true`](type/true) | A message was posted in a channel |
| **forums** | [`flags.17?true`](type/true) | Forum-related events |
| **sub_extend** | [`flags.18?true`](type/true) | Telegram Star subscription extension events » |

---

## Type

[ChannelAdminLogEventsFilter](type/ChannelAdminLogEventsFilter)

---

## Example

```php
$channelAdminLogEventsFilter = $client->channelAdminLogEventsFilter(
	join : true,
	leave : true,
	invite : true,
	ban : true,
	unban : true,
	kick : true,
	unkick : true,
	promote : true,
	demote : true,
	info : true,
	settings : true,
	pinned : true,
	edit : true,
	delete : true,
	group_call : true,
	invites : true,
	send : true,
	forums : true,
	sub_extend : true,
);
```