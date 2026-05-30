# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 222

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
	random_id : 7100536779852228049,
	message : 'O0irGmH5VQRXC7v4',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 62,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 33,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 25,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 90,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 45,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 34,
			language : 'gzLxS48vAUC9JkVs',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 99,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : 6615221047089131579,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 29,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 15,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 20,
			document_id : -1709619871877684981,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 65,
		),
	),
);
```