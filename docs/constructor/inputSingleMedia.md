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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	random_id : -2361554009084749748,
	message : 'PsdRt96VrTnpF0Dx',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 76,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 77,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 80,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 6,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 73,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 96,
			language : 'yBSnOXKMCQHWJxgV',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 80,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : 2894570206373750069,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 36,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 26,
			document_id : -7264102128362515197,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 25,
		),
	),
);
```