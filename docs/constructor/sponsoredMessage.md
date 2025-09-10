# sponsoredMessage

**Description** : *A sponsored message*

**Layer** : 214

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
	title : 'TKGUPyEx86HA5Xns',
	message : 'S9rsfVwDhqMj8Q4R',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 54,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 61,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 44,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 89,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 14,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 25,
			language : 'ZE1vWp0Hb9dCLIz6',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 5,
			user_id : -6328344710934150788,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 51,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 54,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 30,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 53,
			document_id : 4157685068907702499,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 43,
		),
	),
	photo : $client->photoEmpty(
		id : -544822820169336304,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 9,
		background_emoji_id : -4163040813352469020,
	),
	button_text : 'G1jsDzEZIc2aMydr',
	sponsor_info : 'fXYp9GuexE2gBZOC',
	additional_info : 'rpCl3GL02X6DWomj',
	min_display_duration : 64,
	max_display_duration : 8,
);
```