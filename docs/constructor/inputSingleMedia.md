# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 227

```tl
inputSingleMedia#1cc6e91f flags:# media:InputMedia random_id:long message:string entities:flags.0?Vector<MessageEntity> = InputSingleMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The media |
| <mark>random_id</mark> | [`long`](type/long) | Unique client media ID required to prevent message resending |
| <mark>message</mark> | [`string`](type/string) | A caption for the media |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[InputSingleMedia](type/InputSingleMedia)

---

## Example

```php
$inputSingleMedia = $client->inputSingleMedia(
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	random_id : -4453602715264102406,
	message : 'd3e9A7xunlCZbfim',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 11,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 53,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 75,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 33,
			language : 'horOPUpA706x1jT9',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 40,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 28,
			user_id : 1509371298289780885,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 74,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 74,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 77,
			document_id : -4336005564465017227,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 25,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 57,
			date : 1,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 79,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 78,
			old_text : 'TGDzCwQrENZ5adnV',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 86,
		),
	),
);
```