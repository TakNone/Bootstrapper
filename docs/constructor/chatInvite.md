# chatInvite

**Description** : *Chat invite info*

**Layer** : 233

```tl
chatInvite#5c9d3702 flags:# channel:flags.0?true broadcast:flags.1?true public:flags.2?true megagroup:flags.3?true request_needed:flags.6?true verified:flags.7?true scam:flags.8?true fake:flags.9?true can_refulfill_subscription:flags.11?true title:string about:flags.5?string photo:Photo participants_count:int participants:flags.4?Vector<User> color:int subscription_pricing:flags.10?StarsSubscriptionPricing subscription_form_id:flags.12?long bot_verification:flags.13?BotVerification = ChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'BzPU1Y59yFW67qCV',
	about : 'Yew2VtgbjK4AkF5r',
	photo : $client->photoEmpty(
		id : 4795185236560367009,
	),
	participants_count : 7,
	participants : array(
		$client->userEmpty(
			id : -710299218955223951,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			bot_forum_sidebar : true,
			id : 695822138925317159,
			access_hash : 3266548515472038148,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YFgSyOm35CRb8tho',
					reason : 'kerZTGOBNKiQaszt',
					text : 'QtnE6YTsqaJzv7Nh',
				),
			),
			bot_inline_placeholder : 'fTs5GeOr7ByamNSL',
			lang_code : 'ZUezJO8py3B2VcQI',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 45,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -3494121118186999691,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : -8297182565638121346,
			),
			bot_active_users : 41,
			bot_verification_icon : -380807682422248528,
			send_paid_messages_stars : 5392472525563070936,
			linked_community_id : 8036488353181001526,
		),
	),
	color : 23,
	subscription_pricing : $client->starsSubscriptionPricing(
		period : 62,
		amount : 768879116471641573,
	),
	subscription_form_id : 8371180282466395496,
	bot_verification : $client->botVerification(
		bot_id : 7339595714385383475,
		icon : -2070361259750141337,
		description : $client->textWithEntities(
			text : 'gpIFLm6yzxbRQWf1',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 21,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 57,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 1,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 95,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 13,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 5,
					language : 'gqpGPdbiUhBxROvN',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 21,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 29,
					user_id : -6821305126700506441,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 66,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 43,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 69,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 38,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 58,
					document_id : -4893034588374355606,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 37,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 57,
					date : 73,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 41,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 87,
					old_text : 'ADkK3m4PftlqwRo6',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 22,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 89,
				),
			),
		),
	),
);
```