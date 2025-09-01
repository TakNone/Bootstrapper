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
	title : 'tlc6A2uexganKz8j',
	message : 'rthcz68yAC1D05qP',
	entities : array(
		$client->messageEntityUnknown(
			offset : 8,
			length : 81,
		),
		$client->messageEntityMention(
			offset : 94,
			length : 68,
		),
		$client->messageEntityHashtag(
			offset : 34,
			length : 100,
		),
		$client->messageEntityBotCommand(
			offset : 70,
			length : 29,
		),
		$client->messageEntityUrl(
			offset : 60,
			length : 13,
		),
		$client->messageEntityEmail(
			offset : 1,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 75,
			length : 67,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 18,
			length : 18,
		),
		$client->messageEntityPre(
			offset : 6,
			length : 64,
			language : 'S5CAJ7tRBrnMqjIK',
		),
		$client->messageEntityTextUrl(
			offset : 29,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 33,
			length : 61,
			user_id : 113871704412361819,
		),
		$client->inputMessageEntityMentionName(
			offset : 73,
			length : 8,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 22,
			length : 66,
		),
		$client->messageEntityCashtag(
			offset : 27,
			length : 97,
		),
		$client->messageEntityUnderline(
			offset : 62,
			length : 31,
		),
		$client->messageEntityStrike(
			offset : 79,
			length : 13,
		),
		$client->messageEntityBankCard(
			offset : 79,
			length : 66,
		),
		$client->messageEntitySpoiler(
			offset : 58,
			length : 76,
		),
		$client->messageEntityCustomEmoji(
			offset : 53,
			length : 76,
			document_id : 4265152683380505424,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 34,
			length : 8,
		),
	),
	photo : $client->photoEmpty(
		id : 6092678042281732638,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 81,
		background_emoji_id : 8196490575734382182,
	),
	button_text : 'bGm8L5ONl2QxSoX6',
	sponsor_info : '5cptdL0JflqUK9Hj',
	additional_info : 'ZIlXjoPtOEkGqJaD',
	min_display_duration : 0,
	max_display_duration : 31,
);
```