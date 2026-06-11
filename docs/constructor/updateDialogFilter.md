# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 227

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
	id : 54,
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
		id : 96,
		title : $client->textWithEntities(
			text : 'Ffx5qCuVPnrpZost',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 98,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 43,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 59,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 47,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 59,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 16,
					language : '2u5GCcUjRkXOIqxD',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 16,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 60,
					user_id : 3510485778332076680,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 98,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 10,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 46,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 70,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 6,
					document_id : 1228921169655409991,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 23,
					date : 87,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 63,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 26,
					old_text : '9IBV8zteJ2pFNXjZ',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 71,
				),
			),
		),
		emoticon : 'uXBOzwI7HDUN5RKG',
		color : 90,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```