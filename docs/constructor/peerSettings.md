# peerSettings

**Description** : *List of actions that are possible when interacting with this user, to be shown as suggested actions in the chat action bar &raquo;, see here &raquo; for more info*

**Layer** : 214

```tl
peerSettings#f47741f7 flags:# report_spam:flags.0?true add_contact:flags.1?true block_contact:flags.2?true share_contact:flags.3?true need_contacts_exception:flags.4?true report_geo:flags.5?true autoarchived:flags.7?true invite_members:flags.8?true request_chat_broadcast:flags.10?true business_bot_paused:flags.11?true business_bot_can_reply:flags.12?true geo_distance:flags.6?int request_chat_title:flags.9?string request_chat_date:flags.9?int business_bot_id:flags.13?long business_bot_manage_url:flags.13?string charge_paid_message_stars:flags.14?long registration_month:flags.15?string phone_country:flags.16?string name_change_date:flags.17?int photo_change_date:flags.18?int = PeerSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **report_spam** | [`flags.0?true`](type/true) | Whether we can still report the user for spam |
| **add_contact** | [`flags.1?true`](type/true) | Whether we can add the user as contact |
| **block_contact** | [`flags.2?true`](type/true) | Whether we can block the user |
| **share_contact** | [`flags.3?true`](type/true) | Whether we can share the user's contact |
| **need_contacts_exception** | [`flags.4?true`](type/true) | Whether a special exception for contacts is needed |
| **report_geo** | [`flags.5?true`](type/true) | Whether we can report a geogroup as irrelevant for this location |
| **autoarchived** | [`flags.7?true`](type/true) | Whether this peer was automatically archived according to privacy settings and can be unarchived |
| **invite_members** | [`flags.8?true`](type/true) | If set, this is a recently created group chat to which new members can be invited |
| **request_chat_broadcast** | [`flags.10?true`](type/true) | This flag is set if request_chat_title and request_chat_date fields are set and the join request » is related to a channel (otherwise if only the request fields are set, the join request » is related to a chat) |
| **business_bot_paused** | [`flags.11?true`](type/true) | This flag is set if both business_bot_id and business_bot_manage_url are set and all connected business bots » were paused in this chat using account.toggleConnectedBotPaused » |
| **business_bot_can_reply** | [`flags.12?true`](type/true) | This flag is set if both business_bot_id and business_bot_manage_url are set and connected business bots » can reply to messages in this chat, as specified by the settings during initial configuration |
| **geo_distance** | [`flags.6?int`](type/int) | Distance in meters between us and this peer |
| **request_chat_title** | [`flags.9?string`](type/string) | If set, this is a private chat with an administrator of a chat or channel to which the user sent a join request, and this field contains the chat/channel's title |
| **request_chat_date** | [`flags.9?int`](type/int) | If set, this is a private chat with an administrator of a chat or channel to which the user sent a join request, and this field contains the timestamp when the join request » was sent |
| **business_bot_id** | [`flags.13?long`](type/long) | Contains the ID of the business bot » managing this chat, used to display info about the bot in the action bar |
| **business_bot_manage_url** | [`flags.13?string`](type/string) | Contains a deep link », used to open a management menu in the business bot. This flag is set if and only if business_bot_id is set |
| **charge_paid_message_stars** | [`flags.14?long`](type/long) | NOTHING |
| **registration_month** | [`flags.15?string`](type/string) | NOTHING |
| **phone_country** | [`flags.16?string`](type/string) | NOTHING |
| **name_change_date** | [`flags.17?int`](type/int) | NOTHING |
| **photo_change_date** | [`flags.18?int`](type/int) | NOTHING |

---

## Type

[PeerSettings](type/PeerSettings)

---

## Example

```php
$peerSettings = $client->peerSettings(
	report_spam : true,
	add_contact : true,
	block_contact : true,
	share_contact : true,
	need_contacts_exception : true,
	report_geo : true,
	autoarchived : true,
	invite_members : true,
	request_chat_broadcast : true,
	business_bot_paused : true,
	business_bot_can_reply : true,
	geo_distance : 6,
	request_chat_title : 'FRpG6uheqnXxEHQw',
	request_chat_date : 90,
	business_bot_id : 6334746351875461011,
	business_bot_manage_url : 'https://docs.liveproto.dev',
	charge_paid_message_stars : -2383245247988211596,
	registration_month : '5E6gvxOTt8pW3rFD',
	phone_country : '+1234567890',
	name_change_date : 75,
	photo_change_date : 60,
);
```