# contacts.importContacts

**Description** : *Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*

**Layer** : 222

```tl
contacts.importContacts#2c800be5 contacts:Vector<InputContact> = contacts.ImportedContacts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>contacts</mark> | [`Vector<InputContact>`](type/InputContact) | List of contacts to import |

---

## Result

[contacts.ImportedContacts](type/contacts.ImportedContacts)

---

## Example

```php
$contactsImportedContacts = $client->contacts->importContacts(
	contacts : array(
		$client->inputPhoneContact(
			client_id : 8407518289792361509,
			phone : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			note : $client->textWithEntities(
				text : 'l8dIZCe9xH7VzNjq',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 70,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 43,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 27,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 58,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 72,
						language : '6WMyFOB0pGrXP3TY',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 84,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 97,
						user_id : -1614144687354292751,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 11,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 67,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 92,
						document_id : -700853490331710253,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 27,
					),
				),
			),
		),
	),
);
```