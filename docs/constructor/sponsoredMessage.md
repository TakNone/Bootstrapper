# sponsoredMessage

**Description** : *A sponsored message*

**Layer** : 229

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
| <mark>random_id</mark> | [`bytes`](type/bytes) | Message ID. See here » for more info on random ID deduplication and updateMessageID mapping |
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
	title : '5KDsxlj869AGMYTb',
	message : '4qKsUTjZYnO5WaNQ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 35,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 72,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 81,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 36,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 13,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 57,
			language : 'R8FkzeXDpEKdNCP1',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 18,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : -4496462779711086193,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 5,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 89,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 49,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 97,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 45,
			document_id : 721000570214058900,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 35,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 45,
			date : 28,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 48,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 3,
			old_text : 'NHzr28naxgdsG1fI',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 87,
		),
	),
	photo : $client->photoEmpty(
		id : 2719037728825864865,
	),
	media : $client->messageMediaEmpty(),
	color : $client->peerColor(
		color : 90,
		background_emoji_id : -1615787323431631914,
	),
	button_text : 'W1nuGEcB9ZHsbz5P',
	sponsor_info : 'D78CxVYaAGuWynoK',
	additional_info : 'BLvxq63wkbFeSlJA',
	min_display_duration : 17,
	max_display_duration : 11,
);
```