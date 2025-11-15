# updates.channelDifference

**Description** : *The new updates*

**Layer** : 216

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 90,
	timeout : 33,
	new_messages : array(
		$client->messageEmpty(
			id : 11,
			peer_id : $client->peerUser(
				user_id : 5879891989453725306,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 61,
			from_id : $client->peerUser(
				user_id : 5423035808837189189,
			),
			from_boosts_applied : 88,
			peer_id : $client->peerUser(
				user_id : -298539972460404042,
			),
			saved_peer_id : $client->peerUser(
				user_id : -1610075002517275802,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'KZph3VbdDg170wum',
				date : 12,
				channel_post : 66,
				post_author : '43GxoCMRwdEvnuUB',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 2,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'PI9DxXa8uTispLkG',
				saved_date : 16,
				psa_type : 'lxpCy6Isbhjvf219',
			),
			via_bot_id : 1402904503194221711,
			via_business_bot_id : -5222360849049711245,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 5,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 94,
				quote_text : 'fUPKVCGTedjWywDI',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 6,
				todo_item_id : 9,
			),
			date : 78,
			message : '28UOabyqCjeRV0XG',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 82,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 88,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 70,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 63,
					language : 'XqZb5d7aHl08LnIT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 64,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : -2531750908997150336,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 40,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 62,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 6,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 55,
					document_id : 9074869988512543190,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 97,
				),
			),
			views : 63,
			forwards : 9,
			replies : $client->messageReplies(
				comments : true,
				replies : 13,
				replies_pts : 6,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : -2035346910223640880,
				max_id : 61,
				read_max_id : 97,
			),
			edit_date : 73,
			post_author : 'Lq2uHlP8UzOoSewE',
			grouped_id : -47629602604676351,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6u9vDRfYIsZl7KHo',
					reason : 'nS83f02qb7ohTeEx',
					text : 'IwK1t30TScWQjpxu',
				),
			),
			ttl_period : 63,
			quick_reply_shortcut_id : 99,
			effect : -7503987376174741841,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'oDah3cIe9ByPdrvU',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 30,
			paid_message_stars : -2013891709589369836,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 23,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 18,
			from_id : $client->peerUser(
				user_id : -2588707997043425373,
			),
			peer_id : $client->peerUser(
				user_id : -854519223402889670,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1746369386614764819,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 21,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 2,
				quote_text : 'PbWnjclkhTE05D3G',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 7,
				todo_item_id : 38,
			),
			date : 68,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 10,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(...),
			),
			pts : 34,
			pts_count : 5,
		),
		$client->updateMessageID(
			id : 35,
			random_id : -8088985603077544629,
		),
		$client->updateDeleteMessages(
			messages : array(4),
			pts : 94,
			pts_count : 54,
		),
		$client->updateUserTyping(
			user_id : 4157090038800142721,
			top_msg_id : 84,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -156667930739295534,
			from_id : $client->peerUser(
				user_id : -7996782666501168755,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -174924180242455229,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 5956054719362161030,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 9105976844648542663,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 99,
			device : 'YlFXsxmEfyuLjvWh',
			location : '0xsbn5gAT4cLvHE6',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 8850583757427124590,
				chat_id : 76,
				date : 63,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 17,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 58,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 4,
			),
			date : 28,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 9,
			max_date : 57,
			date : 4,
		),
		$client->updateChatParticipantAdd(
			chat_id : -7499545472115066467,
			user_id : -6258075012174146983,
			inviter_id : 2503754173525526128,
			date : 67,
			version : 76,
		),
		$client->updateChatParticipantDelete(
			chat_id : -5430486128997937581,
			user_id : 1673759825278006045,
			version : 59,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 5,
					ip_address : '127.0.0.1',
					port : 34,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 59,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 34,
			type : 'LWSvzAHPm5jMZbXr',
			message : 'B4fZgpTG1LtrJ6cP',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 1,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 98,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 25,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 85,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 33,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 99,
					language : 'UXTCRfiIzE7ntJuh',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 70,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 50,
					user_id : -2438426176114683389,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 31,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 10,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 48,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : 422372906348644143,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 81,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(1503177465633498612),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(8380924712538695450),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-480816406403498217),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-3731412435576335261),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 1050725437394521208,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 74,
			peer : $client->peerUser(
				user_id : 8810263816731328229,
			),
			top_msg_id : 65,
			max_id : 55,
			still_unread_count : 97,
			pts : 49,
			pts_count : 23,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 6440464758877683237,
			),
			max_id : 33,
			pts : 90,
			pts_count : 26,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -4390568515958594295,
				url : 'https://docs.liveproto.dev',
			),
			pts : 50,
			pts_count : 14,
		),
		$client->updateReadMessagesContents(
			messages : array(83),
			pts : 81,
			pts_count : 16,
			date : 80,
		),
		$client->updateChannelTooLong(
			channel_id : -121612384695988420,
			pts : 20,
		),
		$client->updateChannel(
			channel_id : 1588966236896390996,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 95,
				peer_id : $client->peerUser(...),
			),
			pts : 35,
			pts_count : 4,
		),
		$client->updateReadChannelInbox(
			folder_id : 35,
			channel_id : -7835124335043010104,
			max_id : 51,
			still_unread_count : 23,
			pts : 13,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 1833235419800429607,
			messages : array(45),
			pts : 21,
			pts_count : 56,
		),
		$client->updateChannelMessageViews(
			channel_id : 7129521779616389909,
			id : 11,
			views : 3,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -5603637576955505200,
			user_id : -5734524573466372682,
			is_admin : true,
			version : 72,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(3704146363361989485),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -6573885022110524516,
			user_id : 2744736749698630854,
			query : 'h2YV6lGRakiJLE7q',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'CAQR7mSjchsNlK1u',
		),
		$client->updateBotInlineSend(
			user_id : 6771388657525065919,
			query : 'KfdBekXMVjwIUSvA',
			geo : $client->geoPointEmpty(),
			id : 'PXvKkj0bfrFo3i92',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 70,
				id : -2671414181112647668,
				access_hash : -2114617525497206652,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 5,
				peer_id : $client->peerUser(...),
			),
			pts : 83,
			pts_count : 54,
		),
		$client->updateBotCallbackQuery(
			query_id : -6526001573181074816,
			user_id : -2601159152345569652,
			peer : $client->peerUser(
				user_id : -9196646358010748116,
			),
			msg_id : 33,
			chat_instance : -2809498671420295767,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'cPE8oOxtzWY3DRup',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(...),
			),
			pts : 22,
			pts_count : 65,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -5388212698433007732,
			user_id : 3247934227628652596,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 30,
				id : 2278921224568988334,
				access_hash : -876968741239985107,
			),
			chat_instance : -4366235621807182929,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'He0Kg3VYMkLTcD2I',
		),
		$client->updateReadChannelOutbox(
			channel_id : 7318456342815665354,
			max_id : 87,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 4070561002542426852,
			),
			top_msg_id : 66,
			saved_peer_id : $client->peerUser(
				user_id : -7469437672691206670,
			),
			draft : $client->draftMessageEmpty(
				date : 43,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -7447575235316664625,
			webpage : $client->webPageEmpty(
				id : 1299278425419891214,
				url : 'https://docs.liveproto.dev',
			),
			pts : 56,
			pts_count : 57,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 28,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 11,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 89,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'KXpZ9RCLA6QVqitf',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 930487518835553677,
			data : $client->dataJSON(
				data : 'irX1vKkIyVgcdeNt',
			),
			timeout : 15,
		),
		$client->updateBotShippingQuery(
			query_id : 6059240685196214176,
			user_id : -2460081432700585101,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'DfLP27hKUWNTMwxm',
				street_line2 : 'xQBWfL71FcRhZIwz',
				city : 'hOdYIJ0nZuxaptvi',
				state : 'B42al3ZoELNjW6UR',
				country_iso2 : 'z1UYcqXLoFRyTDOC',
				post_code : 'vn1NFmRip4Cgcj3s',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -6570101065733801773,
			user_id : -520241738752739896,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : '3INKo1t8brgFmTw7',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'Z5W2Lo7DyQhrIBJs',
			currency : 'p9gQsdUEDVi7c8lq',
			total_amount : -7532778995343685304,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -2027664194130514066,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'mwUujZfzlXCMg2WG',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'MxCGH103ULRbfewK',
				from_version : 36,
				version : 68,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 1771904758491424064,
			top_msg_id : 35,
			saved_peer_id : $client->peerUser(
				user_id : -6149823009826905038,
			),
			messages : array(79),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 8052067930319539811,
			available_min_id : 61,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -5336552097903449467,
			),
		),
		$client->updateMessagePoll(
			poll_id : -7383025743811120397,
			poll : $client->poll(
				id : 2503146309410583541,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 68,
				close_date : 69,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 87,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'TwMW5hX3ACNjtgnL',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -5337001316085859474,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 53,
			),
			version : 67,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 49,
				),
			),
			pts : 90,
			pts_count : 99,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 3283190459074674468,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 21,
				request_chat_title : 'glQ05IUnKCqXJedB',
				request_chat_date : 40,
				business_bot_id : 1692746139885971189,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -4382369609682647530,
				registration_month : 'ZeuyPKxnSI1qTYNr',
				phone_country : '+1234567890',
				name_change_date : 73,
				photo_change_date : 52,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 23,
					distance : 3,
				),
				$client->peerSelfLocated(
					expires : 51,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -246515949130230735,
			),
			messages : array(77),
			sent_messages : array(53),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -5330946207916704716,
				access_hash : -4750563473166512292,
				slug : 'ZBKSeAOrVqQCuG5x',
				title : '3Y2UgGutvsz8Hb5a',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'h0uzDBV1wG3YRbNs',
				installs_count : 52,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 7552953687057625385,
			),
			msg_id : 42,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 1574408012165369421,
			peer : $client->peerUser(
				user_id : 2350022186174393557,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 98,
		),
		$client->updateDialogFilter(
			id : 68,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 99,
				title : $client->textWithEntities(...),
				emoticon : 'yFaAOoZl360EvPf5',
				color : 78,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(68),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 3476374085724209369,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -2014323008886962631,
			id : 77,
			forwards : 25,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -5156547593666465212,
			top_msg_id : 93,
			read_max_id : 80,
			broadcast_id : -5267648720328536474,
			broadcast_post : 72,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -5400721521426350538,
			top_msg_id : 86,
			read_max_id : 1,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -1782352222552008345,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 1789677369976649916,
			top_msg_id : 43,
			from_id : $client->peerUser(
				user_id : 2862734595692877735,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1797430318412667314,
			),
			messages : array(48),
			pts : 36,
			pts_count : 30,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 1222618429600016742,
			messages : array(9),
			pts : 24,
			pts_count : 20,
		),
		$client->updateChat(
			chat_id : 3513356725766095514,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 1750045753741364307,
				access_hash : 6107986273305393154,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 46,
					active_date : 35,
					source : 92,
					volume : 99,
					about : 'EB2VeGuYa4sQk7w0',
					raise_hand_rating : -233684037472178092,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 45,
		),
		$client->updateGroupCall(
			chat_id : -8116626548167352830,
			call : $client->groupCallDiscarded(
				id : 2195125301284659014,
				access_hash : 3572854730765366057,
				duration : 72,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4625089596584522692,
			),
			ttl_period : 61,
		),
		$client->updateChatParticipant(
			chat_id : -8431129641910939385,
			date : 38,
			actor_id : 5198819587096464139,
			user_id : 188345659763954614,
			prev_participant : $client->chatParticipant(
				user_id : 4684010164325983997,
				inviter_id : 1682410505722628631,
				date : 6,
			),
			new_participant : $client->chatParticipant(
				user_id : 9088218695755187264,
				inviter_id : 8059724185895160487,
				date : 55,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'CuIHD4KAgLiVfoeE',
				admin_id : -1439273997592910241,
				date : 72,
				start_date : 36,
				expire_date : 60,
				usage_limit : 4,
				usage : 2,
				requested : 44,
				subscription_expired : 43,
				title : 'UeR31jWKVZlvmMsi',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 77,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -3439177849691843256,
			date : 79,
			actor_id : -7766252024476736043,
			user_id : 5277350122307701955,
			prev_participant : $client->channelParticipant(
				user_id : 5426831037480842599,
				date : 64,
				subscription_until_date : 89,
			),
			new_participant : $client->channelParticipant(
				user_id : 2051340628244018696,
				date : 16,
				subscription_until_date : 75,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'YNklcERGJwZUnIpL',
				admin_id : 7896533517951993297,
				date : 15,
				start_date : 27,
				expire_date : 40,
				usage_limit : 18,
				usage : 9,
				requested : 55,
				subscription_expired : 90,
				title : 'No5tB2FaKv76gOTW',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 75,
		),
		$client->updateBotStopped(
			user_id : -1539386474755565894,
			date : 65,
			stopped : false,
			qts : 37,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'LiTs8un7q2AKkaFH',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -1739837668077705432,
			),
			bot_id : -4255579784855777203,
			commands : array(
				$client->botCommand(
					command : 'gI4EK32UPh6ekmCc',
					description : '0DcYroXjqa3OHn9p',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 2577724338766894686,
			),
			requests_pending : 45,
			recent_requesters : array(-2790525215901381314),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4234024229930809706,
			),
			date : 80,
			user_id : -7876421562623023979,
			about : 'lsJ6Oq5XCUM4WSR1',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'YyO5T3wmWGajDISF',
				admin_id : 4623798566672828655,
				date : 31,
				start_date : 39,
				expire_date : 21,
				usage_limit : 69,
				usage : 70,
				requested : 55,
				subscription_expired : 41,
				title : 'bWqY9ndxcB2kZ4IL',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 56,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 3041912554414235071,
			),
			msg_id : 60,
			top_msg_id : 100,
			saved_peer_id : $client->peerUser(
				user_id : 7701295495380138984,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5515905674174798869,
		),
		$client->updateBotMenuButton(
			bot_id : 3567834368110400545,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -3386208148246858691,
			),
			msg_id : 33,
			transcription_id : 2372444733475853029,
			text : 'WgXA9qupCThwGtOb',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -4073656886592501254,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -3492455495405239528,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -7954178978774974326,
			),
			msg_id : 46,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 45,
					h : 22,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 97,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -6678718922384072734,
			topic_id : 18,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -6689692544431093951,
			order : array(42),
		),
		$client->updateUser(
			user_id : -1741603194978912368,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -3038235453657240290,
			),
			story : $client->storyItemDeleted(
				id : 61,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 4007553303401428244,
			),
			max_id : 9,
		),
		$client->updateStoryID(
			id : 0,
			random_id : 1904971196289404419,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 72,
				cooldown_until_date : 54,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -293060386712970380,
			),
			story_id : 74,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -1825709418608211784,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '5vWqFHcaIJLiXEpu',
				user_id : -365509232505347000,
				giveaway_msg_id : 74,
				date : 96,
				expires : 81,
				used_gift_slug : 'J2wpodx17fluBqGi',
				multiplier : 11,
				stars : -4847254863503660975,
			),
			qts : 63,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7799124885572198165,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 7696294649032340409,
			),
			wallpaper : $client->wallPaper(
				id : -5727795795763204291,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 5299102517571620932,
				slug : '9l3bqH41GkuMXSp5',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7818339817112355616,
			),
			msg_id : 24,
			date : 71,
			actor : $client->peerUser(
				user_id : 3134578559729429111,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'U8cJHqxRnNBbywrD',
				),
				$client->reactionCustomEmoji(
					document_id : -4153132094704226009,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'lVc7YAwnyopITdgW',
				),
				$client->reactionCustomEmoji(
					document_id : 5293949024581031417,
				),
				$client->reactionPaid(),
			),
			qts : 46,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -4251024280383142321,
			),
			msg_id : 90,
			date : 62,
			reactions : array(
				$client->reactionCount(
					chosen_order : 8,
					reaction : $client->reactionEmpty(...),
					count : 4,
				),
			),
			qts : 85,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 0,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'fm6BAeY1cw0LQz78',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 20,
					shortcut : 'C9kEFnqKlYcseiLo',
					top_message : 13,
					count : 29,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 8,
				shortcut : 'YSAgeJZwh50zkmKI',
				top_message : 27,
				count : 44,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 25,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 35,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 89,
			messages : array(25),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'IPSKUeu69MBXw0AE',
				user_id : -1743146244160873368,
				dc_id : 46,
				date : 20,
				rights : $client->businessBotRights(...),
			),
			qts : 54,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'bWVBli2kXNwR3uqG',
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(...),
			),
			qts : 47,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'h9KRsIQ75gL4bjpk',
			message : $client->messageEmpty(
				id : 18,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 74,
				peer_id : $client->peerUser(...),
			),
			qts : 55,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '0dYRjAkyvi3nWDQN',
			peer : $client->peerUser(
				user_id : -690944577381578814,
			),
			messages : array(43),
			qts : 3,
		),
		$client->updateNewStoryReaction(
			story_id : 75,
			peer : $client->peerUser(
				user_id : 6362062805516899080,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 6021317498466568175,
				nanos : 69,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 7152662723252812281,
			user_id : -7589734385911582009,
			connection_id : 'MkC8TbP2svyuNtzo',
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 39,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 2747360102289187450,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 6074976441230159902,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 54,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -83635104082605911,
			payload : '9Cti0oNeEZGlyQ4j',
			qts : 24,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 15,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 4351563131254106037,
				access_hash : 5329454577884904376,
			),
			sub_chain_id : 81,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 17,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 1777522294669766253,
			saved_peer_id : $client->peerUser(
				user_id : 3794300041656068142,
			),
			read_max_id : 41,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -2237805881214630163,
			saved_peer_id : $client->peerUser(
				user_id : 4695153585591354136,
			),
			read_max_id : 60,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -5345851069727643988,
			saved_peer_id : $client->peerUser(
				user_id : -2616474392161489199,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 22,
			peer : $client->peerUser(
				user_id : -8529196610630062980,
			),
			topic_id : 52,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -9200671208633925369,
				access_hash : -8187804489956143916,
			),
			from_id : $client->peerUser(
				user_id : -8930710346457065932,
			),
			random_id : 8255199849995226791,
			message : $client->textWithEntities(
				text : 'EvZ5lHmVz3BUhob6',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -1485711795125485345,
			text : 'Bnz9UGWQLxu4yKNZ',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 6622614340889593362,
			payload : 'mzbLYEyiSnPq9wud',
			until_date : 6,
			qts : 6,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 4911791662323367686,
				access_hash : -3615307576175455251,
			),
			from_id : $client->peerUser(
				user_id : 7896809147775001655,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -5995562002035172821,
			),
			order : array(33),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3308626079455434202,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 383282256666633793,
			title : 'UBydoCX6AnpNLRbS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 48,
			date : 43,
			version : 13,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : -1430784733533788247,
			title : '68jh4e0DysNE9QBz',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 275340945089826494,
			access_hash : -7434501639013710193,
			title : 'q9aN1YPmAU2djxgS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WJXj75B6Zb2UlEpD',
					reason : 'bUYWc6Pr0NLdxCy8',
					text : '2jdvpgoThrO8Xsqt',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 11,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 26,
			),
			participants_count : 78,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 100,
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 1999249257894694467,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : -1591205251090712746,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 86,
			subscription_until_date : 0,
			bot_verification_icon : 2431260111209477401,
			send_paid_messages_stars : 8217462176605249472,
			linked_monoforum_id : -2122775510909545914,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7774666294466573767,
			access_hash : -7717238777117517036,
			title : '68HBtUZq9lpuY2MJ',
			until_date : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2916563165312501087,
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
			id : 5586133940292419192,
			access_hash : -2038740748243268903,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'M6qWy31gpz5CjofO',
					reason : 'Uxo6SqERM149NfDn',
					text : 'wGcZIsvSJ6pu3XHj',
				),
			),
			bot_inline_placeholder : 'sXFHJqu7rZGWRgpi',
			lang_code : 'mhYFtjDIozVXdnb5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 8,
			color : $client->peerColor(
				color : 33,
				background_emoji_id : 1212881571795636940,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : -2032385072547260611,
			),
			bot_active_users : 26,
			bot_verification_icon : 8376294305551330674,
			send_paid_messages_stars : -823221440830409614,
		),
	),
);
```