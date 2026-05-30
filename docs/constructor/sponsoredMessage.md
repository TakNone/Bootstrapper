# sponsoredMessage

**Description** : *A sponsored message*

**Layer** : 222

```tl
sponsoredMessage#7dbf8673 flags:# recommended:flags.5?true can_report:flags.12?true random_id:bytes url:string title:string message:string entities:flags.1?Vector<MessageEntity> photo:flags.6?Photo media:flags.14?MessageMedia color:flags.13?PeerColor button_text:string sponsor_info:flags.7?string additional_info:flags.8?string min_display_duration:flags.15?int max_display_duration:flags.15?int = SponsoredMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **min_display_duration** | [`flags.15?int`](type/int) | For sponsored messages to show on channel videos », allow the user to hide the ad only after the specified amount of seconds |
| **max_display_duration** | [`flags.15?int`](type/int) | For sponsored messages to show on channel videos », autohide the ad after after the specified amount of seconds |

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
	title : 'rLaW2nt3zmDb0iHJ',
	message : 'EGsVfq0hXtTMgIBv',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 50,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 50,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 75,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 78,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 37,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 83,
			language : 'mSYOBeftQpl8PjKb',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 70,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 37,
			user_id : 1593869144549229205,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 4,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 76,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 88,
			document_id : 5164153313097410517,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 88,
		),
	),
	photo : $client->photoEmpty(
		id : -6628425988091198328,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 2,
		background_emoji_id : -3413125657318287590,
	),
	button_text : 'vKcy3QXHWzE4Brnq',
	sponsor_info : '72VnpU6deoyEJPSu',
	additional_info : 'GEMZkXNibfxB4ARY',
	min_display_duration : 67,
	max_display_duration : 37,
);
```