# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 225

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
	random_id : 4953155256041598903,
	message : 'ITaNyJAqULvorQYZ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 73,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 99,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 89,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 98,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 71,
			language : '3CxnApHUZGsj4JNc',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 23,
			user_id : 1823696269911025148,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 6,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 91,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 85,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 85,
			document_id : 366750544180636946,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 5,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 6,
			date : 79,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 47,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 1,
			old_text : 'UOCtvZHr5XGSs4i9',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 91,
		),
	),
);
```