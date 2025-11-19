# chatInvite

**Description** : *Chat invite info*

**Layer** : 218

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
	title : 'W0JGX5A1iz2bOwNQ',
	about : 'reBwncYag58hJM0y',
	photo : $client->photoEmpty(
		id : 6037054884984783500,
	),
	participants_count : 39,
	participants : array(
		$client->userEmpty(
			id : 7004033657165218859,
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
			id : -7342685396699644723,
			access_hash : -8499032432424766246,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9wveixH1LljzEI4M',
					reason : 'JiNhXqZg1morD5w2',
					text : 'prq6HT8oeLQguU0y',
				),
			),
			bot_inline_placeholder : '2BErcUjkfp36oKQy',
			lang_code : 'RzDrYgfStB1yi7Iq',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 73,
			),
			color : $client->peerColor(
				color : 44,
				background_emoji_id : 8127323271865697782,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -1209178263667873431,
			),
			bot_active_users : 75,
			bot_verification_icon : 3172034660746047433,
			send_paid_messages_stars : 1510155730404102547,
		),
	),
	color : 89,
	subscription_pricing : $client->starsSubscriptionPricing(
		period : 93,
		amount : 5316232173603634660,
	),
	subscription_form_id : -1015506416871810002,
	bot_verification : $client->botVerification(
		bot_id : 4824778353953148750,
		icon : 274346407746884575,
		description : '41cfJbtkwVO3e8Eo',
	),
);
```