# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 225

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
	id : 3,
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
		id : 61,
		title : $client->textWithEntities(
			text : 'dRrPG3mjYpyILlFM',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 53,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 72,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 7,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 49,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 12,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 46,
					language : '17pfhjDeWylU0a5d',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 94,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 25,
					user_id : -1691596254714808015,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 83,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 22,
					document_id : 9105281549206040723,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 75,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 46,
					date : 87,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 74,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 69,
					old_text : '9Lj4Zdvy3UqcGzxR',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 26,
				),
			),
		),
		emoticon : 'gYboGAQnXJ5TLwke',
		color : 50,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```