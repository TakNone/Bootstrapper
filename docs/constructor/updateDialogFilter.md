# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 218

```tl
updateDialogFilter#26ffde7d flags:# id:int filter:flags.0?DialogFilter = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| **filter** | [`flags.0?DialogFilter`](type/DialogFilter) | Folder info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogFilter(
	id : 40,
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 85,
		title : $client->textWithEntities(
			text : 'ruiGfD46xkB5NvTU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 41,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 43,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 65,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 70,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 3,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 24,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 32,
					language : 'sobZgUY97Rz2kMVa',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 10,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 24,
					user_id : 2766290455822094405,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 99,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 41,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : 2405765267075841651,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 6,
				),
			),
		),
		emoticon : 'VEOFDIg9vzyRnhwC',
		color : 18,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```