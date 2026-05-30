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
			client_id : -2371450337187396838,
			phone : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			note : $client->textWithEntities(
				text : 'tBgaAfHd1nzmR0Q3',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 71,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 12,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 97,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 95,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 76,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 97,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 27,
						language : 'oFi0rcy2suwvxUYX',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 36,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 68,
						user_id : 8942218973101239168,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 41,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 18,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 78,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 19,
						document_id : -6820715785072762946,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 42,
					),
				),
			),
		),
	),
);
```