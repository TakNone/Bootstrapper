# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 233

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
	random_id : 6329629826305156610,
	message : 'bJrfFPKM5BhOVXg4',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 25,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 59,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 94,
			language : '0j1AYkpWDVUCr6u8',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : -4721144137123722698,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 58,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 58,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 51,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 63,
			document_id : -3051698667186935555,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 44,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 92,
			date : 90,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 71,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 94,
			old_text : 'M9fgXC8WY7j5leOm',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 18,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 76,
		),
	),
);
```