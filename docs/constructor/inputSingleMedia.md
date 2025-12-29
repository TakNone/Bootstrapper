# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 218

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
	random_id : -9130460602698864515,
	message : 'RQEz5YUi0qLMc4Fj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 72,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 22,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 22,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 2,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 91,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 48,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 33,
			language : 'SW1reoDg8KZk4IFj',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 47,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 9,
			user_id : 645546334248357678,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 25,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 93,
			document_id : 1570503574833137167,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 82,
		),
	),
);
```