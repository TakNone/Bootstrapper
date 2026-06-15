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
	random_id : -2789337155654995062,
	message : 'MdHeRWgTk4FGzprV',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 91,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 7,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 6,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 35,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 31,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 89,
			language : 'iSgR9yWA5ZkdYTJw',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 12,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : 2294076880890910865,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 4,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 4,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 15,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 30,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 86,
			document_id : 4035101753542516880,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 59,
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
			date : 82,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 49,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 43,
			old_text : 'MAjN4qVTzL0bikcD',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 1,
		),
	),
);
```