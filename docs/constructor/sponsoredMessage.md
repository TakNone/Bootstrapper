# sponsoredMessage

**Description** : *A sponsored message*

**Layer** : 216

```tl
sponsoredMessage#7dbf8673 flags:# recommended:flags.5?true can_report:flags.12?true random_id:bytes url:string title:string message:string entities:flags.1?Vector<MessageEntity> photo:flags.6?Photo media:flags.14?MessageMedia color:flags.13?PeerColor button_text:string sponsor_info:flags.7?string additional_info:flags.8?string min_display_duration:flags.15?int max_display_duration:flags.15?int = SponsoredMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **recommended** | [`flags.5?true`](type/true) | Whether the message needs to be labeled as "recommended" instead of "sponsored" |
| **can_report** | [`flags.12?true`](type/true) | Whether this message can be reported as specified here » |
| <mark>random_id</mark> | [`bytes`](type/bytes) | Message ID |
| <mark>url</mark> | [`string`](type/string) | Contains the URL to open when the user clicks on the sponsored message |
| <mark>title</mark> | [`string`](type/string) | Contains the title of the sponsored message |
| <mark>message</mark> | [`string`](type/string) | Sponsored message |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text in message |
| **photo** | [`flags.6?Photo`](type/Photo) | If set, contains a custom profile photo bubble that should be displayed for the sponsored message, like for messages sent in groups |
| **media** | [`flags.14?MessageMedia`](type/MessageMedia) | If set, contains some media |
| **color** | [`flags.13?PeerColor`](type/PeerColor) | If set, the sponsored message should use the message accent color » specified in color |
| <mark>button_text</mark> | [`string`](type/string) | Label of the sponsored message button |
| **sponsor_info** | [`flags.7?string`](type/string) | If set, contains additional information about the sponsor to be shown along with the message |
| **additional_info** | [`flags.8?string`](type/string) | If set, contains additional information about the sponsored message to be shown along with the message |
| **min_display_duration** | [`flags.15?int`](type/int) | NOTHING |
| **max_display_duration** | [`flags.15?int`](type/int) | NOTHING |

---

## Type

[SponsoredMessage](type/SponsoredMessage)

---

## Example

```php
$sponsoredMessage = $client->sponsoredMessage(
	recommended : true,
	can_report : true,
	random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	url : 'https://docs.liveproto.dev',
	title : '3PU1u05oDHQVRGmj',
	message : 'BRDyZk2QtPzYGJ5O',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 72,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 60,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 19,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 12,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 44,
			language : '0XhtMR8OHUpWb6wK',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : 2419396477127886072,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 41,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 66,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 11,
			document_id : -211534850351755687,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 49,
		),
	),
	photo : $client->photoEmpty(
		id : -9117152135205543784,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 31,
		background_emoji_id : 142854838632363463,
	),
	button_text : '39L4nIWa1bsdFxR5',
	sponsor_info : 'HucypTxKQEt1bmPj',
	additional_info : 'WTXKzC8U9hDN1VFp',
	min_display_duration : 26,
	max_display_duration : 88,
);
```