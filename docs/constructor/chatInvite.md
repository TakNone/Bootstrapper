# chatInvite

**Description** : *Chat invite info*

**Layer** : 216

```tl
chatInvite#5c9d3702 flags:# channel:flags.0?true broadcast:flags.1?true public:flags.2?true megagroup:flags.3?true request_needed:flags.6?true verified:flags.7?true scam:flags.8?true fake:flags.9?true can_refulfill_subscription:flags.11?true title:string about:flags.5?string photo:Photo participants_count:int participants:flags.4?Vector<User> color:int subscription_pricing:flags.10?StarsSubscriptionPricing subscription_form_id:flags.12?long bot_verification:flags.13?BotVerification = ChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **channel** | [`flags.0?true`](type/true) | Whether this is a channel/supergroup or a normal group |
| **broadcast** | [`flags.1?true`](type/true) | Whether this is a channel |
| **public** | [`flags.2?true`](type/true) | Whether this is a public channel/supergroup |
| **megagroup** | [`flags.3?true`](type/true) | Whether this is a supergroup |
| **request_needed** | [`flags.6?true`](type/true) | Whether the join request » must be first approved by an administrator |
| **verified** | [`flags.7?true`](type/true) | Is this chat or channel verified by Telegram? |
| **scam** | [`flags.8?true`](type/true) | This chat is probably a scam |
| **fake** | [`flags.9?true`](type/true) | If set, this chat was reported by many users as a fake or scam: be careful when interacting with it |
| **can_refulfill_subscription** | [`flags.11?true`](type/true) | If set, indicates that the user has already paid for the associated Telegram Star subscriptions » and it hasn't expired yet, so they may re-join the channel using messages.importChatInvite without repeating the payment |
| <mark>title</mark> | [`string`](type/string) | Chat/supergroup/channel title |
| **about** | [`flags.5?string`](type/string) | Description of the group of channel |
| <mark>photo</mark> | [`Photo`](type/Photo) | Chat/supergroup/channel photo |
| <mark>participants_count</mark> | [`int`](type/int) | Participant count |
| **participants** | [`flags.4?Vector<User>`](type/User) | A few of the participants that are in the group |
| <mark>color</mark> | [`int`](type/int) | Profile color palette ID |
| **subscription_pricing** | [`flags.10?StarsSubscriptionPricing`](type/StarsSubscriptionPricing) | For Telegram Star subscriptions », contains the pricing of the subscription the user must activate to join the private channel |
| **subscription_form_id** | [`flags.12?long`](type/long) | For Telegram Star subscriptions », the ID of the payment form for the subscription |
| **bot_verification** | [`flags.13?BotVerification`](type/BotVerification) | Describes a bot verification icon » |

---

## Type

[ChatInvite](type/ChatInvite)

---

## Example

```php
$chatInvite = $client->chatInvite(
	channel : true,
	broadcast : true,
	public : true,
	megagroup : true,
	request_needed : true,
	verified : true,
	scam : true,
	fake : true,
	can_refulfill_subscription : true,
	title : 'iBEFsJoe9OxLDcmH',
	about : 'fOJXm14oMuIkGvcb',
	photo : $client->photoEmpty(
		id : 5606633482309831123,
	),
	participants_count : 8,
	participants : array(
		$client->userEmpty(
			id : -3448031460349456282,
		),
		$client->user(
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
			bot_forum_view : true,
			id : -7429520978177952659,
			access_hash : 8526758251449782506,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 57,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Dg74KoXJW8EH1I56',
					reason : 'l5iUCFyg6WPcEGjM',
					text : 'fMvcZIwBYGmNo9HS',
				),
			),
			bot_inline_placeholder : 'rg6bDkX9PfnuTWFH',
			lang_code : 'huDMOqJKVnwGy6YT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 86,
			color : $client->peerColor(
				color : 74,
				background_emoji_id : 3088872406455718344,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : 2629040706030973666,
			),
			bot_active_users : 23,
			bot_verification_icon : -8942590007212416557,
			send_paid_messages_stars : 490604777675767537,
		),
	),
	color : 61,
	subscription_pricing : $client->starsSubscriptionPricing(
		period : 71,
		amount : 9080514245727028357,
	),
	subscription_form_id : 4244903206548316532,
	bot_verification : $client->botVerification(
		bot_id : 4566103512946206417,
		icon : 7342064711749472169,
		description : '0HcBTP3rM24dQsyt',
	),
);
```