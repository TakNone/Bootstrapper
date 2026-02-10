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
	random_id : 6259880033556045413,
	message : 'ELMxGNWiQYIpX2gu',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 80,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 44,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 87,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 80,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 29,
			language : 'vGTjysodr5OB4RZC',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 52,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : -7105322539182272187,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 43,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 42,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 47,
			document_id : 661368081228495169,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 51,
		),
	),
);
```