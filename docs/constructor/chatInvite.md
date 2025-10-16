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
| **bot_verification** | [`flags.13?BotVerification`](type/BotVerification) | NOTHING |

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
	title : 'duOjJ91oBFcQqEpI',
	about : 'Zu7reYER2B6GgDSF',
	photo : $client->photoEmpty(
		id : -4606859104270536948,
	),
	participants_count : 53,
	participants : array(
		$client->userEmpty(
			id : -3090733248544107111,
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
			id : -4992904767784520592,
			access_hash : 1879438434957095010,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'e0N38hQ5MK1PCLrE',
					reason : 'mBAK2ageb9i6twJ8',
					text : 'xerWBTU7LRKblP8g',
				),
			),
			bot_inline_placeholder : 'GeCyMvpixSLB37Zd',
			lang_code : 'g1o4wJK7ECvrbzuj',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 94,
			color : $client->peerColor(
				color : 82,
				background_emoji_id : 5693381588106944003,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : -5349693568164931866,
			),
			bot_active_users : 3,
			bot_verification_icon : 4359252743131694769,
			send_paid_messages_stars : -7990356301287363424,
		),
	),
	color : 1,
	subscription_pricing : $client->starsSubscriptionPricing(
		period : 59,
		amount : -5934757021203759534,
	),
	subscription_form_id : -1182922909275284592,
	bot_verification : $client->botVerification(
		bot_id : -7208328265575977737,
		icon : -1826257467050637387,
		description : 'EsWLrFIiYNeVqM0K',
	),
);
```