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
	random_id : '>i?LiveProto?????',
	url : 'https://docs.liveproto.dev',
	title : 'pxidqNCP174XDfVH',
	message : 'jTBA7QN4ScEi3C8D',
	entities : array(
		$client->messageEntityUnknown(
			offset : 28,
			length : 45,
		),
		$client->messageEntityMention(
			offset : 34,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 75,
			length : 32,
		),
		$client->messageEntityBotCommand(
			offset : 26,
			length : 73,
		),
		$client->messageEntityUrl(
			offset : 58,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 3,
			length : 90,
		),
		$client->messageEntityBold(
			offset : 60,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 83,
			length : 22,
		),
		$client->messageEntityCode(
			offset : 91,
			length : 96,
		),
		$client->messageEntityPre(
			offset : 63,
			length : 36,
			language : '956CdZ0BgM3yvfjt',
		),
		$client->messageEntityTextUrl(
			offset : 21,
			length : 48,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 13,
			length : 57,
			user_id : -185678623781829524,
		),
		$client->inputMessageEntityMentionName(
			offset : 78,
			length : 59,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 14,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 8,
			length : 71,
		),
		$client->messageEntityUnderline(
			offset : 6,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 51,
			length : 23,
		),
		$client->messageEntityBankCard(
			offset : 21,
			length : 6,
		),
		$client->messageEntitySpoiler(
			offset : 39,
			length : 19,
		),
		$client->messageEntityCustomEmoji(
			offset : 63,
			length : 15,
			document_id : -6989141822036136900,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 83,
			length : 7,
		),
	),
	photo : $client->photoEmpty(
		id : 1316395856579999653,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 61,
		background_emoji_id : -6545992600154011677,
	),
	button_text : 'XQN6vCTR79zEwejA',
	sponsor_info : '1OvQonATpMqY9gud',
	additional_info : 'EJZ2o53NVabupISy',
	min_display_duration : 44,
	max_display_duration : 80,
);
```