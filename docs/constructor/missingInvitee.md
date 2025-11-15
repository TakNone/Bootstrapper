# missingInvitee

**Description** : *Info about why a specific user could not be invited &raquo;*

**Layer** : 218

```tl
missingInvitee#628c9224 flags:# premium_would_allow_invite:flags.0?true premium_required_for_pm:flags.1?true user_id:long = MissingInvitee;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium_would_allow_invite** | [`flags.0?true`](type/true) | If set, we could not add the user only because the current account needs to purchase a Telegram Premium subscription to complete the operation |
| **premium_required_for_pm** | [`flags.1?true`](type/true) | If set, we could not add the user because of their privacy settings, and additionally, the current account needs to purchase a Telegram Premium subscription to directly share an invite link with the user via a private message |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user. If neither of the flags below are set, we could not add the user because of their privacy settings, and we can create and directly share an invite link with them using a normal message, instead |

---

## Type

[MissingInvitee](type/MissingInvitee)

---

## Example

```php
$missingInvitee = $client->missingInvitee(
	premium_would_allow_invite : true,
	premium_required_for_pm : true,
	user_id : 3294740927135110102,
);
```