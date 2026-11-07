# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 229

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
			id : 59,
			title : $client->textWithEntities(
				text : 'tGib2ezZxI15CTBU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 100,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 11,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 32,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 30,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 43,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 6,
						language : '8HFnPt74wpxRS3cv',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 53,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : 6291244366693840169,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 49,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 21,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 29,
						document_id : 7545058027975221992,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 58,
						date : 52,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 4,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 1,
						old_text : 'boJlI1BfMK4pjt8D',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 62,
					),
				),
			),
			emoticon : 'Scptu0qKQOnxHy31',
			color : 98,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 30,
			title : $client->textWithEntities(
				text : 'hWtQpqkJyVGYnA20',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 44,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 3,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 67,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 39,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 54,
						language : 'eMj2NZOy3xW1SVn9',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 45,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : -6365336767269657308,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 97,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 80,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 52,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 52,
						document_id : -8683218137639574983,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 87,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 77,
						date : 50,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 63,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 68,
						old_text : 'pPAyniIg1UGveFm9',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 81,
					),
				),
			),
			emoticon : '4CeKpF817uzyYSxg',
			color : 20,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```