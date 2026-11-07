# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 229

```tl
inputSingleMedia#1cc6e91f flags:# media:InputMedia random_id:long message:string entities:flags.0?Vector<MessageEntity> = InputSingleMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The media |
| <mark>random_id</mark> | [`long`](type/long) | Unique client media ID required to prevent message resending. See here » for more info on random ID deduplication and updateMessageID mapping |
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
	random_id : 987343442059500092,
	message : 'qMp4DrO08tvLm2cW',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 35,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 90,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 80,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 26,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 48,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 21,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 30,
			language : 'cSQ3lbAtuDyIZ4FB',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : 3203973108838232345,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 84,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 71,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 57,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 17,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 78,
			document_id : 7414831374753231397,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 91,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 33,
			date : 62,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 86,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 12,
			old_text : 'uNM4mlicWj5xTnUD',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 85,
		),
	),
);
```