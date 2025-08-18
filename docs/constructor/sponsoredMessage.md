# sponsoredMessage

**Description** : *A sponsored message*

**Layer** : 211

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
	random_id : 'ў???LiveProto??3}',
	url : 'https://docs.liveproto.dev',
	title : 'SuYcvEMQOGZgmR95',
	message : 'lJkBGCyYwn7R9UDi',
	entities : array(
		$client->messageEntityUnknown(
			offset : 29,
			length : 33,
		),
		$client->messageEntityMention(
			offset : 55,
			length : 40,
		),
		$client->messageEntityHashtag(
			offset : 16,
			length : 39,
		),
		$client->messageEntityBotCommand(
			offset : 77,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 21,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 44,
			length : 41,
		),
		$client->messageEntityBold(
			offset : 19,
			length : 31,
		),
		$client->messageEntityItalic(
			offset : 42,
			length : 3,
		),
		$client->messageEntityCode(
			offset : 38,
			length : 26,
		),
		$client->messageEntityPre(
			offset : 55,
			length : 9,
			language : 'AEhZjQN2a6yreLnM',
		),
		$client->messageEntityTextUrl(
			offset : 22,
			length : 100,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 73,
			length : 35,
			user_id : -3860301695525673686,
		),
		$client->inputMessageEntityMentionName(
			offset : 24,
			length : 78,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 42,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 97,
			length : 17,
		),
		$client->messageEntityUnderline(
			offset : 86,
			length : 27,
		),
		$client->messageEntityStrike(
			offset : 91,
			length : 64,
		),
		$client->messageEntityBankCard(
			offset : 22,
			length : 76,
		),
		$client->messageEntitySpoiler(
			offset : 39,
			length : 49,
		),
		$client->messageEntityCustomEmoji(
			offset : 14,
			length : 77,
			document_id : -7699698213546113645,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 74,
			length : 83,
		),
	),
	photo : $client->photoEmpty(
		id : 1201790328161655985,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 0,
		background_emoji_id : 2072407174258576351,
	),
	button_text : '6Ea0MAx2nlQ7pzOd',
	sponsor_info : 'LgqNyUPz4mjB2c5Y',
	additional_info : '2ISv5MTBGfRwL1sQ',
	min_display_duration : 98,
	max_display_duration : 75,
);
```