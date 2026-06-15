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
	title : '85UrYoVmREZKvQLz',
	message : 'b50SOhoVsG6yuKmT',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 34,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 6,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 70,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 79,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 14,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 19,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 63,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 13,
			language : 'hlpgKZXeMrzbNdfT',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 28,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 97,
			user_id : 1358849643611757278,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 5,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 54,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 77,
			document_id : -6427362347006156574,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 84,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 17,
			date : 30,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 97,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 62,
			old_text : 'KFePY3zO8VS0JND5',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 74,
		),
	),
	photo : $client->photoEmpty(
		id : 9107015412020139761,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 91,
		background_emoji_id : -7896400432481713964,
	),
	button_text : 'sFwCrEtBQLYqfhlj',
	sponsor_info : 'darJWYyAFgmuCR3b',
	additional_info : '4DyeLMCqn6f79RGY',
	min_display_duration : 29,
	max_display_duration : 71,
);
```