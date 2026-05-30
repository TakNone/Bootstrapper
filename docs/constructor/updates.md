# updates

**Description** : *Full constructor of updates*

**Layer** : 222

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 42,
				peer_id : $client->peerUser(
					user_id : 7573702172374905101,
				),
			),
			pts : 81,
			pts_count : 24,
		),
		$client->updateMessageID(
			id : 37,
			random_id : -2879710305154272099,
		),
		$client->updateDeleteMessages(
			messages : array(89),
			pts : 36,
			pts_count : 16,
		),
		$client->updateUserTyping(
			user_id : 8551820101776646134,
			top_msg_id : 81,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7260165630248083031,
			from_id : $client->peerUser(
				user_id : -4012992613526669964,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 80925126603030128,
				self_participant : $client->chatParticipant(
					user_id : 4740518924183236157,
					inviter_id : 6762443835687941369,
					date : 5,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -8291287958676782696,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 5081955620180773468,
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
			date : 10,
			device : 'rmZAn6ty05pUdjIe',
			location : 'l4qLjgIQaTWKNVwH',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -8678644653574825715,
				chat_id : 65,
				date : 72,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 0,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 69,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 90,
			),
			date : 55,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 83,
			max_date : 0,
			date : 56,
		),
		$client->updateChatParticipantAdd(
			chat_id : 3072848812268305789,
			user_id : -5575155961163979281,
			inviter_id : 1120051793247027120,
			date : 14,
			version : 34,
		),
		$client->updateChatParticipantDelete(
			chat_id : -2325630632983535721,
			user_id : -799617020131451802,
			version : 16,
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
					id : 83,
					ip_address : '127.0.0.1',
					port : 5,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -2001582537575476933,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 2,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 66,
			type : 'W8IaLlDfM6veQosE',
			message : '9CX0hAaxbyH7K6s3',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 52,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 68,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 95,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 94,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 43,
					language : 'OFhTj8dYGDbBzHZA',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 9,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : -1903418394728270638,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 5,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 19,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 73,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 45,
					document_id : 3096268261118620288,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 77,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7641025832270885046),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-1179863019501304381),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-2089712863721199232),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(2981030061312914766),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 1496831814188438400,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 64,
			peer : $client->peerUser(
				user_id : 2675464684780984152,
			),
			top_msg_id : 42,
			max_id : 46,
			still_unread_count : 28,
			pts : 11,
			pts_count : 54,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 2114471380157078596,
			),
			max_id : 47,
			pts : 93,
			pts_count : 53,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5430302406703051407,
				url : 'https://docs.liveproto.dev',
			),
			pts : 10,
			pts_count : 20,
		),
		$client->updateReadMessagesContents(
			messages : array(48),
			pts : 24,
			pts_count : 7,
			date : 39,
		),
		$client->updateChannelTooLong(
			channel_id : 3272619406726934074,
			pts : 13,
		),
		$client->updateChannel(
			channel_id : -7742855594059515334,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 88,
				peer_id : $client->peerUser(
					user_id : -8257888322640940336,
				),
			),
			pts : 63,
			pts_count : 95,
		),
		$client->updateReadChannelInbox(
			folder_id : 64,
			channel_id : -2321373222696802705,
			max_id : 24,
			still_unread_count : 89,
			pts : 25,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -6596238776988792495,
			messages : array(98),
			pts : 9,
			pts_count : 96,
		),
		$client->updateChannelMessageViews(
			channel_id : 7939342143026495681,
			id : 53,
			views : 16,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 3076723401852126892,
			user_id : -5000557745654897520,
			is_admin : false,
			version : 76,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 48,
					id : -9115476954835316326,
					access_hash : -3454552019328341095,
					title : 'N6ZXGayDQTUSIiA4',
					short_name : 'pQWi3SGt4RkUvhMV',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 35,
					thumb_version : 97,
					thumb_document_id : -1897013224720410983,
					count : 52,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'o6t8xULOsMZlyVKk',
						documents : array(-8052302765069426531),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -1066397253352593007,
						keyword : array('6nuJyd7fTpMxFSQA'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -3923608765030178094,
					),
					$client->document(
						id : 8490691864016582144,
						access_hash : 7147636406628007205,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 75,
						mime_type : 'SzdrfBmxRi4IX7kZ',
						size : 3395706793733533132,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 95,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(5721340667958341389),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 3714406849967461600,
			user_id : -7158028193883205497,
			query : 'xeIpSBHYLmt9z5Eu',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'BSFR5wlshPiW4rcG',
		),
		$client->updateBotInlineSend(
			user_id : 3755133625633804029,
			query : 'OB5s3bkRuCng67MG',
			geo : $client->geoPointEmpty(),
			id : 'Yq6acDxFRZnwsfMt',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 42,
				id : 3820357751727888866,
				access_hash : 3221408955937010105,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(
					user_id : 8204198781034982365,
				),
			),
			pts : 0,
			pts_count : 46,
		),
		$client->updateBotCallbackQuery(
			query_id : -5411482894684984951,
			user_id : 5975658837367354678,
			peer : $client->peerUser(
				user_id : 1512011124360302857,
			),
			msg_id : 9,
			chat_instance : 1015641235243851237,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'RCI31PM9WYBqzc8j',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 2,
				peer_id : $client->peerUser(
					user_id : -3633854538149838354,
				),
			),
			pts : 13,
			pts_count : 93,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -8526420619470388072,
			user_id : 3500102878188559733,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 76,
				id : -6644373020411900500,
				access_hash : -9150308507133508883,
			),
			chat_instance : 3133912331636943,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'YkZo7bx2Pnhuy0vV',
		),
		$client->updateReadChannelOutbox(
			channel_id : -560416225521689188,
			max_id : 94,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 5812023739730567089,
			),
			top_msg_id : 6,
			saved_peer_id : $client->peerUser(
				user_id : 104362504783364512,
			),
			draft : $client->draftMessageEmpty(
				date : 38,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -2569988572479265064,
			webpage : $client->webPageEmpty(
				id : 4625419416925361489,
				url : 'https://docs.liveproto.dev',
			),
			pts : 7,
			pts_count : 10,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 52,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -2522106153379936450,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 100,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 2100857665856793514,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 79,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'ULnfRtwIsumqpH94',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -6180363805388432603,
			data : $client->dataJSON(
				data : 'Kb9JzOcluUEH1Xqg',
			),
			timeout : 28,
		),
		$client->updateBotShippingQuery(
			query_id : 388536102775862078,
			user_id : -2191738624367549196,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'Z2MK6IYk1XpTGrwz',
				street_line2 : '4zrUdDHSIjBq8eXV',
				city : 'JcTRYf7AFyNkQP1w',
				state : '7Le1zElPnNIfdv6c',
				country_iso2 : 'kyHN2KCYelTXrVOa',
				post_code : 'tjzxoNZwaYlPLdpX',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 3677611501841989785,
			user_id : -954907215272281249,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'm8Zl60yBQofsWUjK',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'Zxz56G32NeOF8CjT',
					street_line2 : 'kLKrgxvFDbOVh7Ya',
					city : 'q7wOXWKr1u5FD8zP',
					state : 'z2ipFMHIfCj4mSP0',
					country_iso2 : 'QbXzPDHd6vaYuR9N',
					post_code : '1DYn0m5w6eJv3UPV',
				),
			),
			shipping_option_id : 'MEsheb7450dYgnKB',
			currency : '9UPhJX0V6rwGAWZ2',
			total_amount : 5669281715740233425,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -6974713335097366120,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'HuWiqVDt5AoeaCSJ',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'a0rG52R6kDy3hLWb',
				from_version : 29,
				version : 77,
				strings : array(
					$client->langPackString(
						key : 'cnf5lY8LpzAZyGhu',
						value : 'VPZ7aMQkxyiLpYcv',
					),
					$client->langPackStringPluralized(
						key : 'Wg0o3ix9KLQHTpdU',
						zero_value : 'cByR476ibHVJEMv0',
						one_value : '0ThK98I6UjvYCRzi',
						two_value : 'YAekWa4vjfcVsL0E',
						few_value : 'cfp6ue0GdIZQw7ak',
						many_value : 'ajFDrlb27qtWsXki',
						other_value : '4nAq1wPjdvVeZ9rY',
					),
					$client->langPackStringDeleted(
						key : 'hjuUXY8f4FmytxJW',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7669610545428680791,
			top_msg_id : 28,
			saved_peer_id : $client->peerUser(
				user_id : 5025403651952103534,
			),
			messages : array(66),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -7667386589729536405,
			available_min_id : 41,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -6809645601109497585,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 6816874314405015044,
			),
		),
		$client->updateMessagePoll(
			poll_id : -2453274041542062416,
			poll : $client->poll(
				id : 1253649440739657409,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'htnX1BsIJme64Nqa',
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 60,
				close_date : 84,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 62,
					),
				),
				total_voters : 37,
				recent_voters : array(
					$client->peerUser(
						user_id : 4425435404688453857,
					),
					$client->peerChat(
						chat_id : -3026814739638259360,
					),
					$client->peerChannel(
						channel_id : -8625720959124144010,
					),
				),
				solution : 'bmKpWFGCD01TZhXA',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 18,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 56,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 91,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 65,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 46,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 94,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 79,
						language : 'JEePAnIYR89TjN5m',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 100,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 27,
						user_id : 8265826758259539545,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 64,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 91,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 41,
						document_id : 7080584527935597551,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 59,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 6508485647410903706,
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
				until_date : 42,
			),
			version : 3,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 1585150144025162002,
					),
					folder_id : 21,
				),
			),
			pts : 84,
			pts_count : 4,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 1720554345976244386,
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
				geo_distance : 6,
				request_chat_title : 'CNWDwEXsg1Sp0k78',
				request_chat_date : 69,
				business_bot_id : -6790399494583298861,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 6707829417058171792,
				registration_month : 'eCYs6Ztq2xXMdRrW',
				phone_country : '+1234567890',
				name_change_date : 80,
				photo_change_date : 53,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -6263264077041429215,
					),
					expires : 88,
					distance : 83,
				),
				$client->peerSelfLocated(
					expires : 80,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(
					user_id : 3709840690903862749,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -2326952726196640361,
			),
			messages : array(88),
			sent_messages : array(20),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 7983496359632242966,
				access_hash : 5926823261256354795,
				slug : 'CRs6mX35ogOrNcfM',
				title : 'k6A4SIq0PH5tQgDV',
				document : $client->documentEmpty(
					id : 4209648391646316310,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 26,
						outbox_accent_color : 49,
						message_colors : array(48),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'FNgkUA0S5lrHxwij',
				installs_count : 61,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -6865805888546921469,
			),
			msg_id : 61,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 284401888135764399,
			peer : $client->peerUser(
				user_id : -792521225903528032,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 99,
		),
		$client->updateDialogFilter(
			id : 51,
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
				id : 17,
				title : $client->textWithEntities(
					text : '2nK1uarfhsy8cte9',
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
				emoticon : 'd2TnNo3bmMJXAIxW',
				color : 45,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(21),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -3175769247243324594,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -6116664293363404287,
			id : 75,
			forwards : 57,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 6099303656724370334,
			top_msg_id : 24,
			read_max_id : 48,
			broadcast_id : 6795844675872609161,
			broadcast_post : 24,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -4243466876478965514,
			top_msg_id : 58,
			read_max_id : 71,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 1615073509853353923,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -5628724997378682599,
			top_msg_id : 29,
			from_id : $client->peerUser(
				user_id : 1286485056705377368,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -973955946129523220,
			),
			messages : array(59),
			pts : 5,
			pts_count : 77,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 7185624312851671729,
			messages : array(24),
			pts : 26,
			pts_count : 26,
		),
		$client->updateChat(
			chat_id : -5785373267209281568,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 5502846585336571281,
				access_hash : -5622636597496950222,
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
					peer : $client->peerUser(
						user_id : -7845085985737176849,
					),
					date : 48,
					active_date : 87,
					source : 62,
					volume : 66,
					about : 'znYbiQ7SM9AXVeBD',
					raise_hand_rating : 177560392119978570,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '2PoYmkeNzn1vqgyX',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 41,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'a0X3D2ApdKNmtuYj',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 11,
					),
					paid_stars_total : -6439382655198946986,
				),
			),
			version : 74,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 2205131674419690252,
			),
			call : $client->groupCallDiscarded(
				id : -2230845446851254852,
				access_hash : 2765030727228250768,
				duration : 85,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4752772731431887301,
			),
			ttl_period : 71,
		),
		$client->updateChatParticipant(
			chat_id : 8372545594201135605,
			date : 9,
			actor_id : -6063393118566631880,
			user_id : -8119410262977395092,
			prev_participant : $client->chatParticipant(
				user_id : -8021709609665642323,
				inviter_id : 8610973624380738646,
				date : 37,
			),
			new_participant : $client->chatParticipant(
				user_id : -2270825658277025583,
				inviter_id : 2535104098266218854,
				date : 8,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'lJDKnCkijNeBRs9c',
				admin_id : -7749126852833891500,
				date : 38,
				start_date : 78,
				expire_date : 40,
				usage_limit : 64,
				usage : 81,
				requested : 90,
				subscription_expired : 27,
				title : '6vweiZ0HUxBb5dtW',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 64,
					amount : 6846204742379033190,
				),
			),
			qts : 14,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -3491036084944520273,
			date : 38,
			actor_id : -6357543423463068608,
			user_id : 4209280553505349423,
			prev_participant : $client->channelParticipant(
				user_id : -2976037251785494198,
				date : 11,
				subscription_until_date : 52,
			),
			new_participant : $client->channelParticipant(
				user_id : 1370472858730106729,
				date : 48,
				subscription_until_date : 77,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '1uSGvYwf3JrEPs2Z',
				admin_id : 8628953368457646959,
				date : 13,
				start_date : 91,
				expire_date : 76,
				usage_limit : 87,
				usage : 80,
				requested : 0,
				subscription_expired : 98,
				title : 'CSpdkViqWZF2mDoE',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 26,
					amount : 19745113958885050,
				),
			),
			qts : 35,
		),
		$client->updateBotStopped(
			user_id : 1010139126392929471,
			date : 38,
			stopped : false,
			qts : 33,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'xOUsAufM3QFzXDJk',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 6201853952405130370,
			),
			bot_id : 5534362945982004177,
			commands : array(
				$client->botCommand(
					command : 'jyZ1zJtm3exbIRhD',
					description : 'bFznxYuJXwW4fGc6',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 3248278166776047781,
			),
			requests_pending : 95,
			recent_requesters : array(2931816735378028186),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4776040656443158746,
			),
			date : 55,
			user_id : -2269722507395725932,
			about : '8sCSJr6XUyEGIeBk',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'dDzvbnAxQtGHpwKJ',
				admin_id : 4435228703753050050,
				date : 31,
				start_date : 32,
				expire_date : 64,
				usage_limit : 71,
				usage : 96,
				requested : 35,
				subscription_expired : 22,
				title : 'Q01stHcgKFXnUw3i',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 62,
					amount : 3451109837213769861,
				),
			),
			qts : 21,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 156136731844199889,
			),
			msg_id : 45,
			top_msg_id : 66,
			saved_peer_id : $client->peerUser(
				user_id : 4150528265631535210,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 51,
						reaction : $client->reactionEmpty(...),
						count : 67,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 48,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 82,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5943394875077852098,
		),
		$client->updateBotMenuButton(
			bot_id : 974571576498136927,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -1195711260827487705,
			),
			msg_id : 8,
			transcription_id : 6319773509234850497,
			text : '6FEUA578LKglCi0f',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -3617673285433079040,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 8083122768533406270,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 2817896419921447260,
			),
			msg_id : 78,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 88,
					h : 88,
					thumb : $client->photoSizeEmpty(
						type : '4kHDtCJALybWOMPq',
					),
					video_duration : 78,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 5098488584197809805,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3177885946501778522,
			),
			story : $client->storyItemDeleted(
				id : 44,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -194555631396803523,
			),
			max_id : 93,
		),
		$client->updateStoryID(
			id : 89,
			random_id : 5408485729594229676,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 73,
				cooldown_until_date : 65,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 5414322159411722345,
			),
			story_id : 8,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -3495557994333390058,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'KDgGVrctHy3CLpTd',
				user_id : 5299296129103107684,
				giveaway_msg_id : 74,
				date : 82,
				expires : 50,
				used_gift_slug : 'XAhi3vJZnPQ6Lr8E',
				multiplier : 84,
				stars : -4387980990097325169,
			),
			qts : 96,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 1387639654484711527,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -3709213324594215530,
			),
			wallpaper : $client->wallPaper(
				id : -923948528170208865,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -8709430689211840102,
				slug : '3Ue4STxVZvj0BaYH',
				document : $client->documentEmpty(
					id : -2269500001342042708,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 25,
					second_background_color : 41,
					third_background_color : 31,
					fourth_background_color : 41,
					intensity : 46,
					rotation : 64,
					emoticon : '5qZhB736PlnYmofT',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 1423178085391514917,
			),
			msg_id : 40,
			date : 53,
			actor : $client->peerUser(
				user_id : -1183967351401777623,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'lGuTIeYb1JQMS4gB',
				),
				$client->reactionCustomEmoji(
					document_id : 7631675981344072751,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'ckTWQOw2lBzGUxuD',
				),
				$client->reactionCustomEmoji(
					document_id : -2999558552887618056,
				),
				$client->reactionPaid(),
			),
			qts : 8,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -907044810154709398,
			),
			msg_id : 54,
			date : 69,
			reactions : array(
				$client->reactionCount(
					chosen_order : 95,
					reaction : $client->reactionEmpty(),
					count : 2,
				),
			),
			qts : 9,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 2873374729489343078,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 506458811519236938,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 48,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'T6LZzR2dACai5JnB',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 60,
					shortcut : '8i2zPKNO9gdEBLsF',
					top_message : 38,
					count : 94,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 96,
				shortcut : 'Dl9z6YGa0f5o3UWN',
				top_message : 15,
				count : 94,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 79,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 88,
				peer_id : $client->peerUser(
					user_id : 6100025284509965600,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 29,
			messages : array(96),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'QDvThWMij1Ip3fox',
				user_id : 6988234132815306163,
				dc_id : 46,
				date : 86,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 98,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'OIqH6PB0A9F4xikE',
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(
					user_id : 7324347059863060169,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 81,
				peer_id : $client->peerUser(
					user_id : -5961983013356234315,
				),
			),
			qts : 78,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '1ZIoykeuRt5WO2vp',
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(
					user_id : 861880747083846072,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : -1787454667472005895,
				),
			),
			qts : 6,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'zsA0IHN5RyElPmDx',
			peer : $client->peerUser(
				user_id : 8428369262694087482,
			),
			messages : array(87),
			qts : 87,
		),
		$client->updateNewStoryReaction(
			story_id : 85,
			peer : $client->peerUser(
				user_id : -7717119622411980238,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 7043078624860732523,
				nanos : 85,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3353973675240190173,
			user_id : 6619193999683666325,
			connection_id : '061ExdT5qSi3I2Ye',
			message : $client->messageEmpty(
				id : 30,
				peer_id : $client->peerUser(
					user_id : -2391250216163936347,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 23,
				peer_id : $client->peerUser(
					user_id : 7564342367636620794,
				),
			),
			chat_instance : -5787985170150595930,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 7612443213053027349,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -1617140090407147285,
					nanos : 50,
				),
				available_balance : $client->starsAmount(
					amount : -1610667256438976534,
					nanos : 79,
				),
				overall_revenue : $client->starsAmount(
					amount : 6496947078157520632,
					nanos : 78,
				),
				next_withdrawal_at : 44,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 1389904047049228244,
			payload : 'l74LcJEx6iYWmfKr',
			qts : 59,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 73,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 1,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -9150646858622446808,
				access_hash : -7622687356258086152,
			),
			sub_chain_id : 51,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 14,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 8856050105083997376,
			saved_peer_id : $client->peerUser(
				user_id : -7045660535094845748,
			),
			read_max_id : 32,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 529818451410312604,
			saved_peer_id : $client->peerUser(
				user_id : 1425784213255789973,
			),
			read_max_id : 1,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 4803092042944955690,
			saved_peer_id : $client->peerUser(
				user_id : 1971382237172106226,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 896860292307094385,
				access_hash : -5240720402737386270,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 22,
				from_id : $client->peerUser(
					user_id : 5185197721132772592,
				),
				date : 74,
				message : $client->textWithEntities(
					text : 'esu0VpyiGEXtAN59',
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
				paid_message_stars : -3434677633914623582,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -5789831231333916353,
				access_hash : 4622655341087911183,
			),
			from_id : $client->peerUser(
				user_id : 6586764086928282027,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -1135321665326009750,
			),
			topic_id : 100,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -6289754822363696223,
			),
			order : array(1),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -5442185267333998766,
				access_hash : -937597713945685422,
			),
			messages : array(21),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -2932215981667503818,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 2570974942336316570,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 4714251142575659600,
				bid_date : 55,
				min_bid_amount : 4404942286408116494,
				bid_peer : $client->peerUser(
					user_id : 9219553389841057216,
				),
				acquired_count : 5,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	users : array(
		$client->userEmpty(
			id : 8593494172405133096,
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
			id : -4752768458334860299,
			access_hash : 2165646124128592007,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1VyDwMjgS5UToK8a',
					reason : 'mVlfGQXS0x2EiaRI',
					text : 'OzmUMIltZGh5x702',
				),
			),
			bot_inline_placeholder : 'MgCLuOKXjsQB5koS',
			lang_code : 'M5oSxTkFV9BA1u0J',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : -1819485607736031202,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -626821686597161548,
			),
			bot_active_users : 91,
			bot_verification_icon : -2032982545033377835,
			send_paid_messages_stars : -4159464462799140492,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -127383907695760205,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5401561867547353303,
			title : 'uqJ7BVfhL0idgRrC',
			photo : $client->chatPhotoEmpty(),
			participants_count : 29,
			date : 89,
			version : 19,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 29,
			),
		),
		$client->chatForbidden(
			id : -2626545493770451624,
			title : '3a0NX5jiVwPp69It',
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
			id : 3846014467418898370,
			access_hash : -3933560901583228599,
			title : 'XgiBbyjofNECT15r',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GpWlk21LIC4XSyVP',
					reason : 'XjaVuEyLkg9fNZcQ',
					text : 'gWInZMu3AYki0VzL',
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
				until_date : 12,
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
			participants_count : 54,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 76,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : 5902119673691430954,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 2244459435167195390,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 21,
			subscription_until_date : 38,
			bot_verification_icon : -5512245036550571238,
			send_paid_messages_stars : 6193293426808165477,
			linked_monoforum_id : -5493326704720215197,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3656996246841823528,
			access_hash : 5862417202167860578,
			title : 'Ew6BmdSsz3ODoh4C',
			until_date : 23,
		),
	),
	date : 17,
	seq : 47,
);
```