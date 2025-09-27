# user

**Description** : *Indicates info about a certain user*

**Layer** : 214

```tl
user#20b1422 flags:# self:flags.10?true contact:flags.11?true mutual_contact:flags.12?true deleted:flags.13?true bot:flags.14?true bot_chat_history:flags.15?true bot_nochats:flags.16?true verified:flags.17?true restricted:flags.18?true min:flags.20?true bot_inline_geo:flags.21?true support:flags.23?true scam:flags.24?true apply_min_photo:flags.25?true fake:flags.26?true bot_attach_menu:flags.27?true premium:flags.28?true attach_menu_enabled:flags.29?true flags2:# bot_can_edit:flags2.1?true close_friend:flags2.2?true stories_hidden:flags2.3?true stories_unavailable:flags2.4?true contact_require_premium:flags2.10?true bot_business:flags2.11?true bot_has_main_app:flags2.13?true id:long access_hash:flags.0?long first_name:flags.1?string last_name:flags.2?string username:flags.3?string phone:flags.4?string photo:flags.5?UserProfilePhoto status:flags.6?UserStatus bot_info_version:flags.14?int restriction_reason:flags.18?Vector<RestrictionReason> bot_inline_placeholder:flags.19?string lang_code:flags.22?string emoji_status:flags.30?EmojiStatus usernames:flags2.0?Vector<Username> stories_max_id:flags2.5?int color:flags2.8?PeerColor profile_color:flags2.9?PeerColor bot_active_users:flags2.12?int bot_verification_icon:flags2.14?long send_paid_messages_stars:flags2.15?long = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **self** | [`flags.10?true`](type/true) | Whether this user indicates the currently logged in user |
| **contact** | [`flags.11?true`](type/true) | Whether this user is a contact When updating the local peer database, do not apply changes to this field if the min flag is set |
| **mutual_contact** | [`flags.12?true`](type/true) | Whether this user is a mutual contact. When updating the local peer database, do not apply changes to this field if the min flag is set |
| **deleted** | [`flags.13?true`](type/true) | Whether the account of this user was deleted. Changes to this flag should invalidate the local userFull cache for this user ID, see here » for more info |
| **bot** | [`flags.14?true`](type/true) | Is this user a bot? Changes to this flag should invalidate the local userFull cache for this user ID, see here » for more info |
| **bot_chat_history** | [`flags.15?true`](type/true) | Can the bot see all messages in groups? |
| **bot_nochats** | [`flags.16?true`](type/true) | Can the bot be added to groups? |
| **verified** | [`flags.17?true`](type/true) | Whether this user is verified |
| **restricted** | [`flags.18?true`](type/true) | Access to this user must be restricted for the reason specified in restriction_reason |
| **min** | [`flags.20?true`](type/true) | See min |
| **bot_inline_geo** | [`flags.21?true`](type/true) | Whether the bot can request our geolocation in inline mode |
| **support** | [`flags.23?true`](type/true) | Whether this is an official support user |
| **scam** | [`flags.24?true`](type/true) | This may be a scam user |
| **apply_min_photo** | [`flags.25?true`](type/true) | If set and min is set, the value of photo can be used to update the local database, see the documentation of that flag for more info |
| **fake** | [`flags.26?true`](type/true) | If set, this user was reported by many users as a fake or scam user: be careful when interacting with them |
| **bot_attach_menu** | [`flags.27?true`](type/true) | Whether this bot offers an attachment menu web app |
| **premium** | [`flags.28?true`](type/true) | Whether this user is a Telegram Premium user Changes to this flag should invalidate the local userFull cache for this user ID, see here » for more info. Changes to this flag if the self flag is set should also trigger the following calls, to refresh the respective caches: - The help.getConfig cache - The messages.getTopReactions cache if the bot flag is not set |
| **attach_menu_enabled** | [`flags.29?true`](type/true) | Whether we installed the attachment menu web app offered by this bot. When updating the local peer database, do not apply changes to this field if the min flag is set |
| <mark>flags2</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **bot_can_edit** | [`flags2.1?true`](type/true) | Whether we can edit the profile picture, name, about text and description of this bot because we own it. When updating the local peer database, do not apply changes to this field if the min flag is set. Changes to this flag (if min is not set) should invalidate the local userFull cache for this user ID |
| **close_friend** | [`flags2.2?true`](type/true) | Whether we marked this user as a close friend, see here » for more info. When updating the local peer database, do not apply changes to this field if the min flag is set |
| **stories_hidden** | [`flags2.3?true`](type/true) | Whether we have hidden » all active stories of this user. When updating the local peer database, do not apply changes to this field if the min flag is set |
| **stories_unavailable** | [`flags2.4?true`](type/true) | No stories from this user are visible |
| **contact_require_premium** | [`flags2.10?true`](type/true) | If set, we can only write to this user if they have already sent some messages to us, if we are subscribed to Telegram Premium, or if they're a mutual contact (user.mutual_contact).  All the secondary conditions listed above must be checked separately to verify whether we can still write to the user, even if this flag is set (i.e. a mutual contact will have this flag set even if we can still write to them, and so on...); to avoid doing these extra checks if we haven't yet cached all the required information (for example while displaying the chat list in the sharing UI) the users.getIsPremiumRequiredToContact method may be invoked instead, passing the list of users currently visible in the UI, returning a list of booleans that directly specify whether we can or cannot write to each user; alternatively, the userFull.contact_require_premium flag contains the same (fully checked, i.e. it's not just a copy of this flag) info returned by users.getIsPremiumRequiredToContact. To set this flag for ourselves invoke account.setGlobalPrivacySettings, setting the settings.new_noncontact_peers_require_premium flag |
| **bot_business** | [`flags2.11?true`](type/true) | Whether this bot can be connected to a user as specified here » |
| **bot_has_main_app** | [`flags2.13?true`](type/true) | If set, this bot has configured a Main Mini App » |
| <mark>id</mark> | [`long`](type/long) | ID of the user, see here » for more info |
| **access_hash** | [`flags.0?long`](type/long) | Access hash of the user, see here » for more info. If this flag is set, when updating the local peer database, generate a virtual flag called min_access_hash, which is: - Set to true if min is set AND -- The phone flag is not set OR -- The phone flag is set and the associated phone number string is non-empty - Set to false otherwise. Then, apply both access_hash and min_access_hash to the local database if: - min_access_hash is false OR - min_access_hash is true AND -- There is no locally cached object for this user OR -- There is no access_hash in the local cache OR -- The cached object's min_access_hash is also true If the final merged object stored to the database has the min_access_hash field set to true, the related access_hash is only suitable to use in inputPeerPhotoFileLocation », to directly download the profile pictures of users, everywhere else a inputPeer*FromMessage constructor will have to be generated as specified here ». Bots can also use min access hashes in some conditions, by passing 0 instead of the min access hash |
| **first_name** | [`flags.1?string`](type/string) | First name. When updating the local peer database, apply changes to this field only if: - The min flag is not set OR - The min flag is set AND -- The min flag of the locally cached user entry is set |
| **last_name** | [`flags.2?string`](type/string) | Last name. When updating the local peer database, apply changes to this field only if: - The min flag is not set OR - The min flag is set AND -- The min flag of the locally cached user entry is set |
| **username** | [`flags.3?string`](type/string) | Main active username. When updating the local peer database, apply changes to this field only if: - The min flag is not set OR - The min flag is set AND -- The min flag of the locally cached user entry is set. Changes to this flag should invalidate the local userFull cache for this user ID if the above conditions are respected and the bot_can_edit flag is also set |
| **phone** | [`flags.4?string`](type/string) | Phone number. When updating the local peer database, apply changes to this field only if: - The min flag is not set OR - The min flag is set AND -- The min flag of the locally cached user entry is set |
| **photo** | [`flags.5?UserProfilePhoto`](type/UserProfilePhoto) | Profile picture of user. When updating the local peer database, apply changes to this field only if: - The min flag is not set OR - The min flag is set AND -- The apply_min_photo flag is set OR -- The min flag of the locally cached user entry is set |
| **status** | [`flags.6?UserStatus`](type/UserStatus) | Online status of user. When updating the local peer database, apply changes to this field only if: - The min flag is not set OR - The min flag is set AND -- The min flag of the locally cached user entry is set OR -- The locally cached user entry is equal to userStatusEmpty |
| **bot_info_version** | [`flags.14?int`](type/int) | Version of the bot_info field in userFull, incremented every time it changes. Changes to this flag should invalidate the local userFull cache for this user ID, see here » for more info |
| **restriction_reason** | [`flags.18?Vector<RestrictionReason>`](type/RestrictionReason) | Contains the reason why access to this user must be restricted |
| **bot_inline_placeholder** | [`flags.19?string`](type/string) | Inline placeholder for this inline bot |
| **lang_code** | [`flags.22?string`](type/string) | Language code of the user |
| **emoji_status** | [`flags.30?EmojiStatus`](type/EmojiStatus) | Emoji status |
| **usernames** | [`flags2.0?Vector<Username>`](type/Username) | Additional usernames. When updating the local peer database, apply changes to this field only if: - The min flag is not set OR - The min flag is set AND -- The min flag of the locally cached user entry is set. Changes to this flag (if the above conditions are respected) should invalidate the local userFull cache for this user ID |
| **stories_max_id** | [`flags2.5?int`](type/int) | ID of the maximum read story.  When updating the local peer database, do not apply changes to this field if the min flag of the incoming constructor is set |
| **color** | [`flags2.8?PeerColor`](type/PeerColor) | The user's accent color |
| **profile_color** | [`flags2.9?PeerColor`](type/PeerColor) | The user's profile color |
| **bot_active_users** | [`flags2.12?int`](type/int) | Monthly Active Users (MAU) of this bot (may be absent for small bots) |
| **bot_verification_icon** | [`flags2.14?long`](type/long) | NOTHING |
| **send_paid_messages_stars** | [`flags2.15?long`](type/long) | NOTHING |

---

## Type

[User](type/User)

---

## Example

```php
$user = $client->user(
	self : true,
	contact : true,
	mutual_contact : true,
	deleted : true,
	bot : true,
	bot_chat_history : true,
	bot_nochats : true,
	verified : true,
	restricted : true,
	min : true,
	bot_inline_geo : true,
	support : true,
	scam : true,
	apply_min_photo : true,
	fake : true,
	bot_attach_menu : true,
	premium : true,
	attach_menu_enabled : true,
	bot_can_edit : true,
	close_friend : true,
	stories_hidden : true,
	stories_unavailable : true,
	contact_require_premium : true,
	bot_business : true,
	bot_has_main_app : true,
	id : -4482625893899223535,
	access_hash : -7268362066254838881,
	first_name : 'Tak',
	last_name : 'None',
	username : 'TakNone',
	phone : '+1234567890',
	photo : $client->userProfilePhotoEmpty(),
	status : $client->userStatusEmpty(),
	bot_info_version : 31,
	restriction_reason : array(
		$client->restrictionReason(
			platform : '7DMaCPTzsJ8GjxdW',
			reason : '9I856OsWvJmghpFf',
			text : 'D5WUI2HaolmTAbdc',
		),
	),
	bot_inline_placeholder : 'jHkVm2P5w0MifXdL',
	lang_code : 'fRbam1BUzXVHJlkg',
	emoji_status : $client->emojiStatusEmpty(),
	usernames : array(
		$client->username(
			editable : true,
			active : true,
			username : 'TakNone',
		),
	),
	stories_max_id : 50,
	color : $client->peerColor(
		color : 5,
		background_emoji_id : -8686336164075184541,
	),
	profile_color : $client->peerColor(
		color : 33,
		background_emoji_id : -392708915579485837,
	),
	bot_active_users : 85,
	bot_verification_icon : 9016116297343990946,
	send_paid_messages_stars : -2024014202624470553,
);
```