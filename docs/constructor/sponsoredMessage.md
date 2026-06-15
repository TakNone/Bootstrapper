# sponsoredMessage

**Description** : *A sponsored message*

**Layer** : 227

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
	title : 'Xojl6P4ORLfSH21e',
	message : 'scRO9DTKmdGbMjHL',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 76,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 26,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 82,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 16,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 42,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 67,
			language : '0pxOyPz5Jcb2U38o',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 30,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 100,
			user_id : 5671476881699051257,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 51,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 45,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 72,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 94,
			document_id : 2952469327401633430,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 24,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 35,
			date : 5,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 70,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 31,
			old_text : 'iM0s5brTAGHqFIaL',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 77,
		),
	),
	photo : $client->photoEmpty(
		id : 3404786797545459718,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 38,
		background_emoji_id : 6154085510255860581,
	),
	button_text : 'FLJu4lKrZcN89QpS',
	sponsor_info : 'nSI6kWb0XQtw1RVr',
	additional_info : '3yxMluhUZzFgwHDR',
	min_display_duration : 20,
	max_display_duration : 39,
);
```