# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 227

```tl
messages.dialogFilters#2ad93719 flags:# tags_enabled:flags.0?true filters:Vector<DialogFilter> = messages.DialogFilters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **tags_enabled** | [`flags.0?true`](type/true) | Whether folder tags are enabled |
| <mark>filters</mark> | [`Vector<DialogFilter>`](type/DialogFilter) | Folders |

---

## Type

[messages.DialogFilters](type/messages.DialogFilters)

---

## Example

```php
$messagesDialogFilters = $client->messages->dialogFilters(
	tags_enabled : true,
	filters : array(
		$client->dialogFilter(
			contacts : true,
			non_contacts : true,
			groups : true,
			broadcasts : true,
			bots : true,
			exclude_muted : true,
			exclude_read : true,
			exclude_archived : true,
			title_noanimate : true,
			id : 21,
			title : $client->textWithEntities(
				text : 'AWOvuVr1yKMwnf7P',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 6,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 83,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 19,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 3,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 30,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 29,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 67,
						language : 'HjnbyAdPEDMmOwpJ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 70,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 36,
						user_id : -140441633677558875,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 58,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 27,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 20,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 97,
						document_id : 3663502359856997891,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 58,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 37,
						date : 62,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 25,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 18,
						old_text : 'ewQ8EzSXumxb0YUD',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 71,
					),
				),
			),
			emoticon : 'uS3nIK9At850zUBf',
			color : 88,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 51,
			title : $client->textWithEntities(
				text : 'h7BnwHP69vDdeXOt',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 3,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 67,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 89,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 3,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 60,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 42,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 11,
						language : 'MGf3EpbmB2Vnl4OZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 59,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 37,
						user_id : 4110757616152401794,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 11,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : -2567824037175584330,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 3,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 30,
						date : 96,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 100,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 15,
						old_text : 'wlXGYIZWkN72hLFs',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 8,
					),
				),
			),
			emoticon : '5Ti0PrtZBKGjYNhl',
			color : 15,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```