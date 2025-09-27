# messages.invitedUsers

**Description** : *Contains info about successfully or unsuccessfully invited &raquo; users*

**Layer** : 216

```tl
messages.invitedUsers#7f5defa6 updates:Updates missing_invitees:Vector<MissingInvitee> = messages.InvitedUsers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Updates`](type/Updates) | List of updates about successfully invited users (and eventually info about the created group) |
| <mark>missing_invitees</mark> | [`Vector<MissingInvitee>`](type/MissingInvitee) | A list of users that could not be invited, along with the reason why they couldn't be invited |

---

## Type

[messages.InvitedUsers](type/messages.InvitedUsers)

---

## Example

```php
$messagesInvitedUsers = $client->messages->invitedUsers(
	updates : $client->updatesTooLong(),
	missing_invitees : array(
		$client->missingInvitee(
			premium_would_allow_invite : true,
			premium_required_for_pm : true,
			user_id : 7877389867482831466,
		),
	),
);
```